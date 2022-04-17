@extends('layouts.main')

@section('title')
    Terms and Conditions
@endsection

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Terms of use</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Terms of use</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

    <section class="section-padding about-section-s5" style="background-color: #eeeeee;">
        <div class="container">

            <div class="row">
                <div class="col col-md-7">
                    <div class="about-details">
                        <h3>General</h3>
                        <p>The terms and conditions contained herein apply to the investment services of Apex Digital Chain investment company made available through its official website at www.apexdigitalchain.com. All information made available to the investor/client pertaining to this Promotion, including information contained within websites of Apex Digital Chain, form a legal agreement between the investor/client and Apex Digital Chain.<br>
                            By electing to participate in any of the investment businesses of Apex Digital Chain, you are indicating you agree to be bound by the terms and conditions contained herein and contained within website materials of Apex Digital Chain, coupled with any Client Agreement(s) executed.<br>
                            Apex Digital Chain reserves the right to amend these terms and conditions at any time. Such modifications shall become effective immediately at the time the amendment is executed and posted on the Apex Digital Chain website. Apex Digital Chain is not required to make announcements as to such amendments.</p>
                    </div>

                    <div class="about-details">
                        <h3>Eligible Accounts</h3>
                        <p>To be eligible to participate in any of the services of Apex Digital Chain, clients/investors or their representatives must be eighteen (18) years of age or older, or the legal age of majority in the client's/investor's home country, state or province; be legally entitled to use our services in accordance with applicable law; currently maintain a cryptocurrency account with a Wallet; and make a deposit with Apex Digital Chain totaling no less than the stipulated account on the chosen investment product (the Initial Deposit) during the investment Period as defined herein.</p>
                    </div>

                    <div class="about-details">
                        <h3>Account Restrictions</h3>
                        <p>If there are promotions of bonuses on accounts within Apex Digital Chain, these promotions will be based on a One bonus per account per client. Also, accounts are only transferable with requests made, reviewed, and granted by the management of Apex Digital Chain.</p>
                    </div>

                    <div class="about-details">
                        <h3>Account Activation and Operation</h3>
                        <p>Apex Digital Chain will credit all Eligible Accounts, as defined herein, with deposits (as made by investor) totaling an amount determined by the initial deposit made by client, as set forth in the table of plans. Such deposit must be made within 48 hours of creating an investment account or the said account shall be deleted.<br>
                            Client must complete the required lots (as stipulated in the chosen plan) prior to the activation of the investment account within 48 hours of opening the account. Charges on investment account operation and/or maintenance shall be deducted upon completion of investment cycle. Withdrawals can only be made after an account completes its initial investment cycle (IIC) as stipulated in the plan details.</p>
                    </div>

                    <div class="about-details">
                        <h3>Release and Withdrawal Restrictions</h3>
                        <p>Client is unable to withdraw or transfer any funds from Client account before or during the initial investment cycle, unless there's a court order to withdraw the account, or Client gives the investment company a 48-hour prior notification of withdrawal by mail or phone call.<br>
                            Should Apex Digital Chain receive a request by mail or phone to withdraw funds prior to the account cycle satisfying the stipulated time, it is then authorized to process such request only after it has debited the account in an amount equal to the operation and/or maintenance fee. Should Client make a withdrawal request during the initial investment cycle and prior to the completion of the cycle, any bonus shall be terminated.<br>
                            Apex Digital Chain's Client agrees that Apex Digital Chain is not liable for any market losses, including margin calls, as a result of a withdrawal made by Apex Digital Chain in order to make payout or retain operation/maintenance charges.</p>
                    </div>

                    <div class="about-details">
                        <h3>Exploitations Misuse and Conditions</h3>
                        <p>If there are promotions of bonuses on accounts within Apex Digital Chain, these promotions will be based on a One bonus per account per client. Also, accounts are only transferable with requests made, reviewed, and granted by the management of Apex Digital Chain.</p>
                    </div>
                </div>

                <div class="col col-md-5">
                    <div class="about-img">
                        <img src="{{ asset('images/about/1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
@endsection
