@extends('layouts.front')

@section('content')
	<!-- Page Content Start -->
	<section class="our-service-common-section margin-top-80">
		<div class="container">
			<div class="row common-sidebar-and-content-wrapper justify-content-center">
				<div class="col-md-8 common-width-box our-service-content-wrapper">
					<div class="common-heading mb-5">
						<h2 class="title">Mortgage Calculators</h2>
						<h2 class="sub-title">{{str_replace('_', ' ', env('APP_NAME'))}} run by professionals</h2>
					</div>
					<div class="mortgage-calculator-wrapper">
						<div>
						    {{-- <p align="center">
						        <a href="https://www.mortgagecalculator.org/">
						            <img src="https://www.mortgagecalculator.org/images/mortgage-calculator-logo.png" width="589" height="57" alt="MortgageCalculator.org" border="0" style="max-width: 100%;" target="_blank" />
						        </a>
						    </p> --}}
						    <iframe
						        src="https://www.mortgagecalculator.org/webmasters/?downpayment=50000&homevalue=300000&loanamount=250000&interestrate=18&loanterm=30&propertytax=2400&pmi=1&homeinsurance=1000&monthlyhoa=0"
						        style="width: 100%; height: 1200px; border: 0;"
						    ></iframe>
						    {{-- <div
						        style="
						            font-family: Arial;
						            height: 36px;
						            top: -36px;
						            padding: 0 8px 0 0;
						            box-sizing: border-box;
						            text-align: right;
						            background: #f6f9f9;
						            border: 1px solid #ccc;
						            color: #868686;
						            line-height: 34px;
						            font-size: 12px;
						            position: relative;
						        "
						    >
						        <a style="color: #868686;" href="https://www.mortgagecalculator.org/free-tools/javascript-mortgage-calculator.php" target="_blank">Javascript Mortgage Calculator</a> by MortgageCalculator.org
						    </div> --}}
						</div>


					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page Content End -->
@stop