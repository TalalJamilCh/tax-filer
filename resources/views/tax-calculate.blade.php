@extends('includes.layout')
@section('meta_tag')
<title>Contact - Taxfiler</title>
@endsection
@section('main_content')
<div class="container pt-20 pb-80">
    <h3 class="pt-50 text-center"> Salary Tax Calculator</h3>
    <form id="form_validation" action="#">
        <div class="row pt-50">
            <div class="col-sm-4">
                <label class="form-label">Your Monthly Salary *</label>
                <input type="number" maxlength="100" class="form-control" id="salary" name="salary" required placeholder=" Please Enter Your Monthly Income">
            </div>
            <div class="col-sm-4">
                <label class="form-label">Select Year *</label>
                <select id="tax-year" name="tax-year" class=" form-select mb-2" required>
                    <option value="22" selected="selected"> Year 2022 -to- 2023 </option>
                    <option value="21">Year 2021 -to- 2022 </option>
                    <option value="20">Year 2020 -to- 2021 </option>
                    <option value="19">Year 2019 -to- 2020</option>
                    <option value="18">Year 2018 -to- 2019</option>
                    <option value="17">Year 2017 -to- 2018</option>
                    <option value="16">Year 2016 -to- 2017</option>
                    <option value="15">Year 2015 -to- 2016</option>
                    <option value="14">Year 2014 -to- 2015</option>
                </select>
            </div>
            <div class="btn-part row pt-30 col-sm-4">
                <div class="form-group">
                    <button id="calculate" class="btn btn-info" style="color: white;" onclick="taxSlab(event)" type="button">Calculate</button>
                </div>
            </div>
        </div>
    </form>
    <div>

        <div class="row pt-50">
            <hr>
            <div class="col-sm-4 ">
                <label class="form-label">Monthly Income</label>

                <input readonly type="text" maxlength="100" class="form-control" id="monthly-salary" name="monthly-salary" value='' required placeholder="Monthly Income Is...">
            </div>

            <div class="col-sm-4 ">
                <label class="form-label">Monthly Tax</label>
                <input readonly type="text" maxlength="100" class="form-control " id="monthly-tax" name="monthly-tax" value='' required placeholder="Monthly Tax Is...">
            </div>

            <div class="col-sm-4 ">
                <label class="form-label">Monthly Income After Tax</label>
                <input readonly type="text" maxlength="100" class="form-control " id="monthly-after-tax" name="monthly-after-tax" value='' required placeholder="Monthly Income Excluding Tax Is...">
            </div>
        </div>
        <div class="row pt-40">

            <div class="col-sm-4 ">
                <label class="form-label">Yearly Income</label>
                <input readonly type="text" maxlength="100" class="form-control " id="yearly-salary" name="" value='' required placeholder="Yearly Income Is...">
            </div>

            <div class="col-sm-4">
                <label class="form-label">Yearly Tax</label>

                <input readonly type="text" maxlength="100" class="form-control " id="yearly-tax" name="" value='' required placeholder="Yearly Tax Is...">
            </div>
            <div class="col-sm-4">
                <label class="form-label">Yearly Income After Tax</label>

                <input readonly type="text" maxlength="100" class="form-control " id="yearly-income-after-tax" name="" value='' required placeholder="Yearly Income Excluding Tax Is...">
            </div>
        </div>
        

    </div>
    <hr>
    <div id="myDiv">

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script type="text/javascript">
    $(function() {
        // console.log( "ready!" );
        taxSlab();
    });
    $("#tax-year").on('change', function() {
        taxSlab();
    });

    function taxSlab() {
        var monthlySalary = document.getElementById("salary").value;
        var taxAmount = calculateTax(monthlySalary * 12);
        document.getElementById("monthly-salary").value = numberWithCommas(monthlySalary);
        document.getElementById("monthly-tax").value = numberWithCommas(round(taxAmount / 12));
        document.getElementById("monthly-after-tax").value = numberWithCommas(round(monthlySalary - round(taxAmount / 12)));
        document.getElementById("yearly-salary").value = numberWithCommas(round(monthlySalary * 12));
        document.getElementById("yearly-income-after-tax").value = numberWithCommas(((monthlySalary * 12) - taxAmount));
        document.getElementById("yearly-tax").value = numberWithCommas(taxAmount);
        // console.log("Tax: " + taxAmount);
        var mySecondDiv = "";
        var taxYear = document.getElementById("tax-year").value;
        if (taxYear == 22) {
            mySecondDiv = $('<div id="mySecondDiv" class="mt-40">' +
                '<div class="content">' +
                '<h3>Income Tax Slabs</h3>' +
                '<p>As per Federal Budget 2022-2023 presented by Government of Pakistan, following slabs and income tax rates will be applicable for salaried' +
                ' persons for the year 2022-2023</p>' +
                '<ol><li>Where the taxable salary income does not exceed<b>Rs. 600,000 </b> the rate of income tax is <b>0%.</b> </li><li> Where the taxable salary' +
                'income exceeds <b>Rs. 600,000</b> but does not exceed <b>Rs. 1,200,000</b> the rate of income tax is <b>2.5%</b> of the amount exceeding <b>Rs. 600,000</b>' +
                '</li><li>Where the taxable salary income exceeds <b>Rs. 1,200,000</b> but does not exceed <b>Rs. 2,400,000</b> the rate of income tax is' +
                '<b>Rs. 15,000+12.5%</b> of the amount exceeding <b>Rs. 1,200,000.</b>' +
                '</li><li>Where the taxable salary income exceeds <b>Rs. 2,400,000</b> but does not exceed <b>Rs. 3,600,000</b> the rate of income tax is' +
                '<b>Rs. 165,000 + 20%</b> of the amount exceeding <b>Rs. 2,400,000.</b> </li> <li> Where the taxable salary income exceeds' +
                '<b>Rs. 3,600,000</b> but does not exceed <b>Rs. 6,000,000</b> the rate of income tax is <b>Rs. 405,000 + 25%</b> of the amount exceeding' +
                '<b>Rs. 3,600,000.</b> </li> <li> Where the taxable salary income exceeds <b>Rs. 6,000,000</b> but does not exceed' +
                '<b>Rs. 12,000,000</b> the rate of income tax is <b>Rs. 1,050,000 + 32.5%</b> of the amount exceeding <b>Rs. 6,000,000.</b> </li> <li>' +
                'Where the taxable salary income exceeds <b>Rs. 12,000,000</b> the rate of income tax is <b>Rs. 2,955,000 + 35%</b> of the amount exceeding' +
                '<b>Rs. 12,000,000.</b> </li>' +
                '</ol></div></div>');
            $('#myDiv').html(mySecondDiv);
        } else if (taxYear == 21 || taxYear == 20 || taxYear == 19) {

            var year = "20" + taxYear;
            mySecondDiv = $('<div id="mySecondDiv" class="mt-40"><div class="content"><h3>Income Tax Slabs</h3>' +
                '<p>As per income tax exemption bill passed by Government of Pakistan, following slabs and income tax rates will be applicable for salaried persons for the year <strong>' + year + '</strong> </p>' +
                '<ol><li>Where the taxable salary income does not exceed <b>Rs. 600,000</b> the rate of income tax is <b>0%.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 600,000 </b> but does not exceed <b>Rs. 1,200,000</b> the rate of income tax is <b>5%</b> of the amount exceeding <b>Rs. 600,000</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 1,200,000 </b> but does not exceed <b>Rs. 1,800,000</b> the rate of income tax is <b>Rs. 30,000 + 10%</b> of the amount exceeding <b>Rs. 1,200,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 1,800,000 </b> but does not exceed <b>Rs. 2,500,000</b> the rate of income tax is <b>Rs. 90,000 + 15%</b> of the amount exceeding <b>Rs. 1,800,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 2,500,000 </b> but does not exceed <b>Rs. 3,500,000</b> the rate of income tax is <b>Rs. 195,000 + 17.5%</b> of the amount exceeding <b>Rs. 2,500,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 3,500,000 </b> but does not exceed <b>Rs. 5,000,000</b> the rate of income tax is <b>Rs. 370,000 + 20%</b> of the amount exceeding <b>Rs. 3,500,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 5,000,000 </b> but does not exceed <b>Rs. 8,000,000</b> the rate of income tax is <b>Rs. 670,000 + 22.5%</b> of the amount exceeding <b>Rs. 5,000,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 8,000,000 </b> but does not exceed <b>Rs. 12,000,000</b> the rate of income tax is <b>Rs. 1,345,000 + 25%</b> of the amount exceeding <b>Rs. 8,000,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 12,000,000</b> but does not exceed <b>Rs. 30,000,000</b> the rate of income tax is <b>Rs. 2,345,000 + 27.5%</b> of the amount exceeding <b>Rs. 12,000,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 30,000,000</b> but does not exceed <b>Rs. 50,000,000</b> the rate of income tax is <b>Rs. 7,295,000 + 30%</b> of the amount exceeding <b>Rs. 30,000,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 50,000,000</b> but does not exceed <b>Rs. 75,000,000</b> the rate of income tax is <b>Rs. 13,295,000 + 32.5%</b> of the amount exceeding <b>Rs. 50,000,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 75,000,000</b> the rate of income tax is <b>Rs. 21,420,000 + 35%</b> of the amount exceeding <b>Rs. 75,000,000.</b></li>' +
                '</ol></div></div>');
            $('#myDiv').html(mySecondDiv);
        } else if (taxYear == 18) {
            mySecondDiv = $('<div id="mySecondDiv" class="mt-40"><div class="content"><h3>Income Tax Slabs</h3>' +
                '<p>As per income tax exemption bill passed by Government of Pakistan, following slabs and income tax rates will be applicable for salaried persons for the year 2018-2019:</p>' +
                '<ol><li>Where the taxable salary income does not exceed <b>Rs. 400,000</b> the rate of income tax is <b>0%.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 400,000</b> but does not exceed <b>Rs. 800,000</b> the rate of income tax is <b>Rs. 1000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 800,000</b> but does not exceed <b>Rs. 1,200,000</b> the rate of income tax is <b>Rs. 2000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 1,200,000</b> but does not exceed <b>Rs. 2,500,000</b> the rate of income tax is <b>5%</b> of the amount exceeding <b>Rs. 1,200,000</b> or <b>Rs. 2000.</b> which one is greater.</li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 2,500,000</b> but does not exceed <b>Rs. 4,000,000</b> the rate of income tax is <b>Rs. 65,000 + 15%</b> of the amount exceeding <b>Rs. 2,500,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 4,000,000</b> but does not exceed <b>Rs. 8,000,000</b> the rate of income tax is <b>Rs. 290,000 + 20%</b> of the amount exceeding <b>Rs. 4,000,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 8,000,000</b> the rate of income tax is <b>Rs. 1,090,000 + 25%</b> of the amount exceeding <b>Rs. 4,800,000.</b></li>' +
                '</ol></div></div>');
            $('#myDiv').html(mySecondDiv);
        } else if (taxYear == 17 || taxYear == 16 || taxYear == 15) {

            var year = "20" + taxYear;
            mySecondDiv = $('<div id="mySecondDiv" class="mt-40"><div class="content"><h3>Income Tax Slabs</h3>' +
                '<p>As per income tax exemption bill passed by Government of Pakistan, following slabs and income tax rates will be applicable for salaried persons for the year <strong>' + year + '</strong> </p>' +
                '<ol><li>Where the taxable salary income does not exceed <b>Rs. 400,000</b> the rate of income tax is <b>0%.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 400,000</b> but does not exceed <b>Rs. 500,000</b> the rate of income tax is <b>2%</b> of the amount exceeding <b>Rs. 400,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 500,000</b> but does not exceed <b>Rs. 750,000</b> the rate of income tax is <b>Rs.2000 + 5%</b> of the amount exceeding <b>Rs. 500,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 750,000</b> but does not exceed <b>Rs. 1,400,000</b> the rate of income tax is <b>Rs. 14,500 + 10%</b> of the amount exceeding <b>Rs. 750,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 1,400,000</b> but does not exceed <b>Rs. 1,500,000</b> the rate of income tax is <b>Rs. 79,500 + 12.5%</b> of the amount exceeding <b>Rs. 1,400,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 1,500,000</b> but does not exceed <b>Rs. 1,800,000</b> the rate of income tax is <b>Rs. 92,000 + 15%</b> of the amount exceeding <b>Rs. 1,500,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 1,800,000</b> but does not exceed <b>Rs. 2,500,000</b> the rate of income tax is <b>Rs. 137,000 + 17.5%</b> of the amount exceeding <b>Rs. 1,800,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 2,500,000</b> but does not exceed <b>Rs. 3,000,000</b> the rate of income tax is <b>Rs. 259,500+ 20%</b> of the amount exceeding <b>Rs. 2,500,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 3,000,000</b> but does not exceed <b>Rs. 3,500,000</b> the rate of income tax is <b>Rs. 359,500 + 22.5%</b> of the amount exceeding <b>Rs. 3,000,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 3,500,000</b> but does not exceed <b>Rs. 4,000,000</b> the rate of income tax is <b>Rs. 472,000 + 25%</b> of the amount exceeding <b>Rs. 3,500,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 4,000,000</b> but does not exceed <b>Rs 7,000,000</b> the rate of income tax is <b>Rs. 597,000 + 27.5%</b> of the amount exceeding <b>Rs. 4,000,000.</b></li>' +
                '<li>Where the taxable salary income exceeds <b>Rs. 7,000,000</b> the rate of income tax is <b>Rs. 1,422,000 + 30%</b> of the amount exceeding <b>Rs. 7,000,000.</b></li>' +
                '</ol></div></div>');
            $('#myDiv').html(mySecondDiv);
        } else if (taxYear == 14) {
            mySecondDiv = $('<div id="mySecondDiv" class="mt-40" ><div class = "content"><h3> Income Tax Slabs </h3>' +
                '<p > As per income tax exemption bill passed by Government of Pakistan, following slabs and income tax rates will be applicable for salaried persons for the year 2014 - 2015: </p>' +
                '<ol><li > Where the taxable salary income does not exceed <b> Rs .400, 000 </b> the rate of income tax is <b>0%.</b > </li>' +
                '<li > Where the taxable salary income exceeds <b> Rs .400, 000 </b> but does not exceed <b>Rs. 750,000</b > the rate of income tax is <b> 5 % </b> of the amount exceeding <b>Rs. 400,000.</b > </li>' +
                '<li > Where the taxable salary income exceeds <b> Rs .750, 000 </b> but does not exceed <b>Rs. 1,400,000</b > the rate of income tax is <b> Rs .17, 500 + 10 % </b> of the amount exceeding <b>Rs. 750,000.</b > </li>' +
                '<li > Where the taxable salary income exceeds <b> Rs .1, 400, 000 </b> but does not exceed <b>Rs. 1,500,000</b > the rate of income tax is <b> Rs .82, 500 + 12.5 % </b> of the amount exceeding <b>Rs. 1,400,000.</b > </li>' +
                '<li > Where the taxable salary income exceeds <b> Rs .1, 500, 000 </b> but does not exceed <b>Rs. 1,800,000</b > the rate of income tax is <b> Rs .95, 000 + 15 % </b> of the amount exceeding <b>Rs. 1,500,000.</b > </li>' +
                '<li > Where the taxable salary income exceeds <b> Rs .1, 800, 000 </b> but does not exceed <b>Rs. 2,500,000</b > the rate of income tax is <b> Rs .140, 000 + 17.5 % </b> of the amount exceeding <b>Rs. 1,800,000.</b > </li>' +
                '<li > Where the taxable salary income exceeds <b> Rs .2, 500, 000 </b> but does not exceed <b>Rs. 3,000,000</b > the rate of income tax is <b> Rs .262, 500 + 20 % </b> of the amount exceeding <b>Rs. 2,500,000.</b > </li>' +
                '<li > Where the taxable salary income exceeds <b> Rs .3, 000, 000 </b> but does not exceed <b>Rs. 3,500,000</b > the rate of income tax is <b> Rs .362, 500 + 22.5 % </b> of the amount exceeding <b>Rs. 3,000,000.</b > </li>' +
                '<li > Where the taxable salary income exceeds <b> Rs .3, 500, 000 </b> but does not exceed <b>Rs. 4,000,000</b > the rate of income tax is <b> Rs .475, 000 + 25 % </b> of the amount exceeding <b>Rs. 3,500,000.</b > </li> ' +
                '<li > Where the taxable salary income exceeds <b> Rs .4, 000, 000 </b> but does not exceed <b>Rs 7,000,000</b > the rate of income tax is <b> Rs .600, 000 + 27.5 % </b> of the amount exceeding <b>Rs. 4,000,000.</b > </li>' +
                '<li > Where the taxable salary income exceeds <b> Rs .7, 000, 000 </b> the rate of income tax is <b>Rs. 1,425,000 + 30%</b > of the amount exceeding < b > Rs .7, 000, 000. </b></li >' +
                '</ol> </div > </div>');
            $('#myDiv').html(mySecondDiv);
        } else {
            alert("Not Available yet");
        }
        return taxAmount;
    };

    function round(num) {
        return +(Math.round(num + "e+2") + "e-2");
    }

    function numberWithCommas(x) {

        // console.log("Value: " + x);
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    function calculateTax(amount) {


        // console.log(amount);

        // return amount;

        var taxAmount = 0;
        var taxYear = document.getElementById("tax-year").value;
        // console.log("Tax Year " + taxYear);
        if (taxYear == 22) { // Year 2022 to Year 2023

            if (amount > 600000 && amount <= 1200000) {
                amount -= 600000;
                taxAmount = amount * 0.025;
            } else if (amount > 1200000 && amount <= 2400000) {
                amount -= 1200000;
                taxAmount = 15000 + amount * 0.125;
            } else if (amount > 2400000 && amount <= 3600000) {
                amount -= 2400000;
                taxAmount = 165000 + amount * 0.2;
            } else if (amount > 3600000 && amount <= 6000000) {
                amount -= 3600000;
                taxAmount = 405000 + amount * 0.25;
            } else if (amount > 6000000 && amount <= 12000000) {
                amount -= 6000000;
                taxAmount = 1005000 + amount * 0.325;
            } else if (amount > 12000000) {
                amount -= 12000000;
                taxAmount = 2955000 + amount * 0.35;
            }

        } else if (taxYear == 21 || taxYear == 20 || taxYear == 19) { // Year 2021 to Year 2022
            if (amount > 600000 && amount <= 1200000) {
                amount -= 600000;
                taxAmount = amount * 0.05;
            } else if (amount > 1200000 && amount <= 1800000) {
                amount -= 1200000;
                taxAmount = 30000 + amount * 0.10;
            } else if (amount > 1800000 && amount <= 2500000) {
                amount -= 1800000;
                taxAmount = 90000 + amount * 0.15;
            } else if (amount > 2500000 && amount <= 3500000) {
                amount -= 2500000;
                taxAmount = 195000 + amount * 0.175;
            } else if (amount > 3500000 && amount <= 5000000) {
                amount -= 3500000;
                taxAmount = 370000 + amount * 0.2;
            } else if (amount > 5000000 && amount <= 8000000) {
                amount -= 5000000;
                taxAmount = 670000 + amount * 0.225;
            } else if (amount > 8000000 && amount <= 12000000) {
                amount -= 8000000;
                taxAmount = 1345000 + amount * 0.25;
            } else if (amount > 12000000 && amount <= 30000000) {
                amount -= 12000000;
                taxAmount = 2345000 + amount * 0.275;
            } else if (amount > 30000000 && amount <= 50000000) {
                amount -= 30000000;
                taxAmount = 7295000 + amount * 0.30;
            } else if (amount > 50000000 && amount <= 75000000) {
                amount -= 50000000;
                taxAmount = 13295000 + amount * 0.325;
            } else if (amount > 75000000) {
                amount -= 75000000;
                taxAmount = 21420000 + amount * 0.35;
            }

        } else if (taxYear == 18) { // 2018 - 2019
            var taxAmount = 0
            if (amount > 400000 && amount <= 800000) {
                taxAmount = 1000
            } else if (amount > 800000 && amount <= 1200000) {
                taxAmount = 2000
            } else if (amount > 1200000 && amount <= 2500000) {
                amount -= 1200000
                var taxAmount1 = amount * 0.05
                var taxAmount2 = 2000
                taxAmount = taxAmount1 > taxAmount2 ? taxAmount1 : taxAmount2
            } else if (amount > 2500000 && amount <= 4000000) {
                amount -= 2500000
                taxAmount = 65000 + amount * 0.15
            } else if (amount > 4000000 && amount <= 8000000) {
                amount -= 4000000
                taxAmount = 290000 + amount * 0.2
            } else if (amount > 8000000) {
                amount -= 8000000
                taxAmount = 1090000 + amount * 0.25
            }
        } else if (taxYear == 17 || taxYear == 16 || taxYear == 15) { //  2015 - 2017
            if (amount > 400000 && amount <= 500000) {
                amount -= 400000;
                taxAmount = amount * 0.02;
            } else if (amount > 500000 && amount <= 750000) {
                amount -= 500000;
                taxAmount = 2000 + amount * 0.05;
            } else if (amount > 750000 && amount <= 1400000) {
                amount -= 750000;
                taxAmount = 14500 + amount * 0.1;
            } else if (amount > 1400000 && amount <= 1500000) {
                amount -= 1400000;
                taxAmount = 79500 + amount * 0.125
            } else if (amount > 1500000 && amount <= 1800000) {
                amount -= 1500000;
                taxAmount = 92000 + amount * 0.15;
            } else if (amount > 1800000 && amount < 2500000) {
                amount -= 1800000; //
                taxAmount = 137000 + amount * 0.175;
            } else if (amount > 2500000 && amount < 3000000) {
                amount -= 2500000; //
                taxAmount = 259500 + amount * 0.2;
            } else if (amount > 3000000 && amount < 3500000) {
                amount -= 3000000; //
                taxAmount = 359500 + amount * 0.225;
            } else if (amount > 3500000 && amount < 4000000) {
                amount -= 3500000; //
                taxAmount = 472000 + amount * 0.25;
            } else if (amount > 4000000 && amount < 7000000) {
                amount -= 4000000; //
                taxAmount = 597000 + amount * 0.275;
            } else if (amount > 7000000) {
                amount -= 7000000; //
                taxAmount = 1422000 + amount * 0.3;
            }
        } else if (taxYear == 14) {
            if (amount > 400000 && amount <= 750000) {
                amount -= 400000;
                taxAmount = amount * 0.05;
            } else if (amount > 750000 && amount <= 1400000) {
                amount -= 750000;
                taxAmount = 17500 + amount * 0.1;
            } else if (amount > 1400000 && amount <= 1500000) {
                amount -= 1400000;
                taxAmount = 82500 + amount * 0.125;
            } else if (amount > 1500000 && amount <= 1800000) {
                amount -= 1500000;
                taxAmount = 95000 + amount * 0.15
            } else if (amount > 1800000 && amount <= 2500000) {
                amount -= 1800000;
                taxAmount = 140000 + amount * 0.175;
            } else if (amount > 2500000 && amount < 3000000) {
                amount -= 2500000; //
                taxAmount = 262500 + amount * 0.2;
            } else if (amount > 3000000 && amount < 3500000) {
                amount -= 3000000; //
                taxAmount = 362500 + amount * 0.225;
            } else if (amount > 3500000 && amount < 4000000) {
                amount -= 3500000; //
                taxAmount = 475000 + amount * 0.25;
            } else if (amount > 4000000 && amount < 7000000) {
                amount -= 4000000; //
                taxAmount = 600000 + amount * 0.275;
            } else if (amount > 7000000) {
                amount -= 7000000; //
                taxAmount = 1425000 + amount * 0.3;
            }
        } else {
            alert("Kaha Rahy ho Itny Saal ??");
        }

        return round(taxAmount);
    }
</script>
@endsection