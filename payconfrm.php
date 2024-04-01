<?php
// ignore_for_file: use_key_in_widget_constructors, prefer_const_constructors_in_immutables, prefer_const_constructors, unused_import, curly_braces_in_flow_control_structures, no_leading_underscores_for_local_identifiers, avoid_print, sized_box_for_whitespace, prefer_is_empty, prefer_final_fields, library_private_types_in_public_api, duplicate_import, non_constant_identifier_names, must_be_immutable, override_on_non_overriding_member, unused_local_variable

import 'package:flutter/material.dart';
import 'package:pay/pay.dart';
import 'payment_config.dart';
import 'dart:io';
import 'package:upi_india/upi_india.dart';

class PaymentConfirmationPage extends StatefulWidget {
  final String selectedPlanPrice;
  PaymentConfirmationPage({required this.selectedPlanPrice});

  @override
  State<PaymentConfirmationPage> createState() => _PaymentConfirmationPageState();
}

class _PaymentConfirmationPageState extends State<PaymentConfirmationPage> {
  Future<UpiResponse>? _transaction;

   UpiIndia _upiIndia = UpiIndia();

   List<UpiApp>? apps;

  TextStyle header = TextStyle(
    fontSize: 18,
    fontWeight: FontWeight.bold,
  );

  TextStyle value = TextStyle(
    fontWeight: FontWeight.w400,
    fontSize: 14,
  );

    @override
  void initState() {
    _upiIndia.getAllUpiApps(mandatoryTransactionId: false).then((value) {
      setState(() {
        apps = value;
      });
    }).catchError((e) {
      apps = [];
    });
    super.initState();
  }

    Future<UpiResponse> initiateTransaction(UpiApp app) async {
      String priceString = widget.selectedPlanPrice; // Replace this with your actual string

      // Use a regular expression to extract numeric characters
      String numericString = priceString.replaceAll(RegExp(r'[^\d.]'), '');

      // Parse the numeric string as a double
      double amount = double.tryParse(numericString) ?? 0.0;
    return _upiIndia.startTransaction(
      app: app,
      receiverUpiId: "9150853822@axl",
      receiverName: 'Mr Akshay',
      transactionRefId: 'TestingUpiIndiaPlugin',
      transactionNote: 'TEKKI Purchase',
      amount: amount,
    );
  }

  Widget displayUpiApps() {
    if (apps == null)
      return Center(child: CircularProgressIndicator());
    else if (apps!.length == 0)
      return Center(
        child: Text(
          " No UPI apps found ",
          style: header,
        ),
      );
    else
      return Align(
        alignment: Alignment.topCenter,
        child: SingleChildScrollView(
          physics: BouncingScrollPhysics(),
          child: Wrap(
            children: apps!.map<Widget>((UpiApp app) {
              return GestureDetector(
                onTap: () {
                  _transaction = initiateTransaction(app);
                  setState(() {});
                },
                child: Container(
                  height: 100,
                  width: 100,
                  child: Column(
                    mainAxisSize: MainAxisSize.min,
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: <Widget>[
                      Image.memory(
                        app.icon,
                        height: 60,
                        width: 60,
                      ),
                      Text(app.name),
                    ],
                  ),
                ),
              );
            }).toList(),
          ),
        ),
      );
  }

  String _upiErrorHandler(error) {
    switch (error) {
      case UpiIndiaAppNotInstalledException:
        return 'Requested app not installed on device';
      case UpiIndiaUserCancelledException:
        return 'You cancelled the transaction';
      case UpiIndiaNullResponseException:
        return 'Requested app didn\'t return any response';
      case UpiIndiaInvalidParametersException:
        return 'Requested app cannot handle the transaction';
      default:
        return 'An Unknown error has occurred';
    }
  }

  void _checkTxnStatus(String status) {
    switch (status) {
      case UpiPaymentStatus.SUCCESS:
        print('Transaction Successful');
        break;
      case UpiPaymentStatus.SUBMITTED:
        print('Transaction Submitted');
        break;
      case UpiPaymentStatus.FAILURE:
        print('Transaction Failed');
        break;
      default:
        print('Received an Unknown transaction status');
    }
  }

  Widget displayTransactionData(title, body) {
    return Padding(
      padding: const EdgeInsets.all(8.0),
      child: Row(
        mainAxisAlignment: MainAxisAlignment.spaceBetween,
        children: [
          Text("$title: ", style: header),
          Flexible(
              child: Text(
            body,
            style: value,
          )),
        ],
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    final os = Platform.operatingSystem;

    final applePayButton = ApplePayButton(
      paymentConfiguration:
          PaymentConfiguration.fromJsonString(defaultApplePay),
      paymentItems: const [
        PaymentItem(
          label: 'Item A',
          amount: '0.01',
          status: PaymentItemStatus.final_price,
        ),
        PaymentItem(
          label: 'Item B',
          amount: '0.01',
          status: PaymentItemStatus.final_price,
        ),
        PaymentItem(
          label: 'Total',
          amount: '0.02',
          status: PaymentItemStatus.final_price,
        ),
      ],
      style: ApplePayButtonStyle.black,
      width: double.infinity,
      height: 50,
      type: ApplePayButtonType.buy,
      margin: const EdgeInsets.only(top: 15.0),
      onPaymentResult: (result) => debugPrint('Payment Result $result'),
      loadingIndicator: const Center(
        child: CircularProgressIndicator(),
      ),
    );

    final googlePayButton = GooglePayButton(
      paymentConfiguration:
          PaymentConfiguration.fromJsonString(defaultGooglePay),
      paymentItems: const [
        PaymentItem(
          label: 'Total',
          amount: '0.01',
          status: PaymentItemStatus.final_price,
        ),
      ],
      type: GooglePayButtonType.pay,
      margin: const EdgeInsets.only(top: 15.0),
      onPaymentResult: (result) => debugPrint('Payment Result $result'),
      loadingIndicator: const Center(
        child: CircularProgressIndicator(),
      ),
    );
    return Scaffold(
      appBar: AppBar(
        title: Text('Payment Confirmation'),
      ),
      body: SingleChildScrollView(
        child: Column(
          children: [
            Container(
              height: 100,
              width: 200,
              decoration: BoxDecoration(
                image: DecorationImage(image: AssetImage('images/tek_matrimony_logo.png'),
                fit: BoxFit.fitWidth
                ),
              ),
            ),
            SizedBox(height: 5,),
            Center(
              child: Card(
                child: Container(
                  height: 700,
                  width: 300,
                  child: Column(
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: [
                      SizedBox(height: 15,),
                      Text('Selected Plan Price: ${widget.selectedPlanPrice}',style: TextStyle(fontSize: 16),),
                    
                      Padding(
                        padding: const EdgeInsets.all(10),
                        child: Center(
                          child: os == 'ios' ? applePayButton : googlePayButton,
                        ),
                      ),
                      Expanded(
                      child: displayUpiApps(),
                    ),
                    Expanded(
                      child: FutureBuilder(
                        future: _transaction,
                        builder: (BuildContext context, AsyncSnapshot<UpiResponse> snapshot) {
                          if (snapshot.connectionState == ConnectionState.done) {
                            if (snapshot.hasError) {
                              return Center(
                                child: Text(
                                  _upiErrorHandler(snapshot.error.runtimeType),
                                  style: header,
                                ), // Print's text message on screen
                              );
                            }
                
                            // If we have data then definitely we will have UpiResponse.
                            // It cannot be null
                            UpiResponse _upiResponse = snapshot.data!;
                
                            // Data in UpiResponse can be null. Check before printing
                            String txnId = _upiResponse.transactionId ?? 'N/A';
                            String resCode = _upiResponse.responseCode ?? 'N/A';
                            String txnRef = _upiResponse.transactionRefId ?? 'N/A';
                            String status = _upiResponse.status ?? 'N/A';
                            String approvalRef = _upiResponse.approvalRefNo ?? 'N/A';
                            _checkTxnStatus(status);
                
                            return Padding(
                              padding: const EdgeInsets.all(8.0),
                              child: Column(
                                mainAxisAlignment: MainAxisAlignment.center,
                                children: <Widget>[
                                  displayTransactionData('Transaction Id', txnId),
                                  displayTransactionData('Response Code', resCode),
                                  displayTransactionData('Reference Id', txnRef),
                                  displayTransactionData('Status', status.toUpperCase()),
                                  displayTransactionData('Approval No', approvalRef),
                                ],
                              ),
                            );
                          } else
                            return Center(
                              child: Text(''),
                            );
                        },
                      ),
                    )
                    ],
                  ),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}

?>