<?php
// Define a PHP class for PaymentConfirmationPage
class PaymentConfirmationPage {
    private $selectedPlanPrice;
    private $apps;
    private $transaction;
    public function __construct($selectedPlanPrice) {
        $this->selectedPlanPrice = $selectedPlanPrice;
        $this->apps = null;
        $this->transaction = null;
    }
    public function init() {
        // Initialize UpiIndia and get all UPI apps
        $this->upiIndia = new UpiIndia();
        $this->apps = $this->upiIndia->getAllUpiApps(false);
        if ($this->apps === null) {
            $this->apps = [];
        }
    }
    public function initiateTransaction($app) {
        $priceString = $this->selectedPlanPrice;
        $numericString = preg_replace('/[^\d.]/', '', $priceString);
        $amount = floatval($numericString) ?: 0.0;
        $transaction = $this->upiIndia->startTransaction([
            'app' => $app,
            'receiverUpiId' => '9150853822@axl',
            'receiverName' => 'Mr Akshay',
            'transactionRefId' => 'TestingUpiIndiaPlugin',
            'transactionNote' => 'TEKKI Purchase',
            'amount' => $amount,
        ]);
        return $transaction;
    }
    public function displayUpiApps() {
        if ($this->apps === null) {
            return 'Center(child: CircularProgressIndicator())';
        } elseif (count($this->apps) == 0) {
            return 'Center(child: Text(" No UPI apps found ", style: header),)';
        } else {
            $appWidgets = '';
            foreach ($this->apps as $app) {
                $appWidgets .= 'GestureDetector(
                    onTap: function() {
                        $this->transaction = $this->initiateTransaction($app);
                    },
                    child: Container(
                        height: 100,
                        width: 100,
                        child: Column(
                            mainAxisSize: MainAxisSize.min,
                            mainAxisAlignment: MainAxisAlignment.center,
                            children: [
                                Image.memory($app->icon, height: 60, width: 60,),
                                Text($app->name),
                            ],
                        ),
                    ),
                ),';
            }
            return 'Align(
                alignment: Alignment.topCenter,
                child: SingleChildScrollView(
                    physics: BouncingScrollPhysics(),
                    child: Wrap(
                        children: [$appWidgets],
                    ),
                ),
            )';
        }
    }
    public function upiErrorHandler($error) {
        switch ($error) {
            case 'UpiIndiaAppNotInstalledException':
                return 'Requested app not installed on device';
            case 'UpiIndiaUserCancelledException':
                return 'You cancelled the transaction';
            case 'UpiIndiaNullResponseException':
                return 'Requested app didn\'t return any response';
            case 'UpiIndiaInvalidParametersException':
                return 'Requested app cannot handle the transaction';
            default:
                return 'An Unknown error has occurred';
        }
    }
    public function checkTxnStatus($status) {
        switch ($status) {
            case 'SUCCESS':
                echo 'Transaction Successful';
                break;
            case 'SUBMITTED':
                echo 'Transaction Submitted';
                break;
            case 'FAILURE':
                echo 'Transaction Failed';
                break;
            default:
                echo 'Received an Unknown transaction status';
                break;
        }
    }
    public function displayTransactionData($title, $body) {
        return 'Padding(
            padding: EdgeInsets.all(8.0),
            child: Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: [
                    Text("$title: ", style: header),
                    Flexible(
                        child: Text(
                            $body,
                            style: value,
                        ),
                    ),
                ],
            ),
        )';
    }
}
// Create an instance of PaymentConfirmationPage
$paymentPage = new PaymentConfirmationPage($_POST['selectedPlanPrice']);
$paymentPage->init();
// Implement the rest of the Flutter code for building the UI and handling user interactions.
?>