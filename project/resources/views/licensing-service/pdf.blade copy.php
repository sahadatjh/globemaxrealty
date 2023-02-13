<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Division of Licensing Services</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,600;0,700;1,400&display=swap");

    </style>
{{-- 
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/front/licensing-service-pdf/pdf.css" /> --}}

<style>
    body {
	background: rgb(204,204,204); 
	font-family: 'Raleway', sans-serif;
}
.page {
	position: relative;
	width: 21cm;
	height: 29.7cm;
	padding: 0.5cm; 
	line-height: 1.35;
	background: #fff;
	display: block;
	margin: 0 auto;
	margin-bottom: 0.5cm;
	box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
	color: #000;
	letter-spacing: .02rem;
	font-weight: 500;
}
.page-footer {
	position: absolute;
	bottom: 10px;
	left: 0;
	width: 100%;
}
h1 {
	font-size: 1rem;
	padding: 3px 0;
	border-top: 2px solid #000;
	border-bottom: 2px solid #000;
	margin: 3px 0 15px;
}
h2 {
	margin: 0 0 5px;
}
a {
	font-weight: 600;
	text-decoration: none;
}
td {
	vertical-align: top;
}
p {
	font-size: 13px;
	text-align: justify;
	margin-top: 0;
	margin-bottom: 5px;
	line-height: 1.35;
}
.input {
	border: none;
	border-bottom: 1px solid #000;
}
.input:focus {
	outline: none;
}
.line-h-3 {
	line-height: 3;
}
.font-italic {
	font-style: italic;
}
.input-text {
	position: absolute;
	left: 0;
	bottom: -21px;
	display: block;
	text-align: center;
	width: 100%;
}
.m-0 {
	margin: 0;
}
.border-bottom {
	border-bottom: 1px solid #000;
	padding-bottom: 10px;
	margin-bottom: 10px;
}
.mb-15 {
	margin-bottom: 15px;
}
.mb-10 {
	margin-bottom: 10px;
}
.pr-3 {
	padding-right: 0.5cm;
}
.pl-3 {
	padding-left: 0.5cm;
}
.text-black {
	color: #000;
}
.text-blue {
	color: #5878FF;
}
.w-50 {
	width: 50%;
}
.w-100 {
	width: 100%;
}
.mw-100 {
	max-width: 100%;
}
.left {
	float: left;
}
.right {
	float: right;
}
.text-right {
	text-align: right;
}
.text-left {
	text-align: left;
}
.text-center {
	text-align: center;
}
.fs-8 {
	font-size: 8px;
}
.fs-9 {
	font-size: 9px;
}
.fs-10 {
	font-size: 10px;
}
.fs-11 {
	font-size: 11px;
}
.fs-12 {
	font-size: 12px;
}
.fs-13 {
	font-size: 13px;
}
.fs-14 {
	font-size: 14px;
}
.fs-15 {
	font-size: 15px;
}
.fs-16 {
	font-size: 16px;
}
.fs-18 {
	font-size: 18px;
}
.fs-20 {
	font-size: 20px;
}
.fw-bold {
	font-weight: bold;
}
.fw-600 {
	font-weight: 600;
}
.container {
	display: inline-flex;
	position: relative;
	align-items: center;
	padding-left: 35px;
	height: 29px;
	cursor: pointer;
	font-size: 13px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	margin-bottom: 10px;
}

/* Hide the browser's default radio button */
.container input {
	position: absolute;
	opacity: 0;
	cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
	position: absolute;
	top: 0;
	left: 0;
	height: 25px;
	width: 25px;
	background-color: #F1F4FF;
	border: 2px solid #000;
}



/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
	content: "";
	position: absolute;
	display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
	display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	background: black;
}
.container.check-container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid #000;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  background: transparent;
}

.container.sm-container {
	padding-left: 22px;
    height: 15px;
    margin-bottom: 8px;
    font-size: 12px;
}
.sm-container .checkmark {
    height: 14px;
    width: 14px;
    border-width: 1px;
}
.container.sm-container .checkmark:after {
	top: 4px;
	left: 4px;
	width: 6px;
    height: 6px;
}

.license-submit-btn {
    background: skyblue;
    padding: 10px 29px;
    border: 1px solid #000;
    color: #000;
    font-size: 16px;
    cursor: pointer;
}

</style>

</head>
<body>

 
        <div class="page">
            <table class="w-100 fs-13">
                <tr>
                    <td class="w-50"><img class="mw-100" src="{{ asset('/') }}assets/front/licensing-service-pdf/logo.jpg" alt="img" /></td>
                    <td class="w-50 text-right fs-10">
                        <div>New York State</div>
                        <div class="fw-bold">Department of State</div>
                        <div class="fw-bold">Division of Licensing Services</div>
                        <div>P.O. Box 22001</div>
                        <div>Albany, NY 12201-2001</div>
                        <div>Customer Service: (518) 474-4429</div>
                        <div><a class="text-black" href="https://dos.ny.gov/">www.dos.ny.gov</a></div>
                    </td>
                </tr>
            </table>
            <h1 class="w-100 fw-bold">New York State Disclosure Form for Buyer and Seller</h1>
            <table class="w-100">
                <tr>
                    <td class="w-50 pr-3">
                        <div class="border-bottom">
                            <h2 class="text-center fs-15">THIS IS NOT A CONTRACT</h2>
                            <div class="font-italic">
                                <p>
                                    New York State law requires real estate licensees who are acting as agents of buyers or sellers of property to advise the potential buyers or sellers with whom they work of the nature of their agency
                                    relationship and the rights and obligations it creates. This disclosure will help you to make informed choices about your relationship with the real estate broker and its sales agents.
                                </p>
                                <p>
                                    Throughout the transaction you may receive more than one disclosure form. The law may require each agent assisting in the transaction to present you with this disclosure form. A real estate agent is a
                                    person qualified to advise about real estate.
                                </p>
                                <p>If you need legal, tax or other advice, consult with a professional in that field</p>
                            </div>
                        </div>
                        <div class="mb-15">
                            <h2 class="text-center fs-15">
                                Disclosure Regarding Real Estate <br />
                                Agency Relationships
                            </h2>
                            <h3 class="fw-bold fs-13 m-0">Seller’s Agent</h3>
                            <p>
                                A seller’s agent is an agent who is engaged by a seller to represent the seller’s interests. The seller’s agent does this by securing a buyer for the seller’s home at a price and on terms acceptable to the
                                seller. A seller’s agent has, without limitation, the following fiduciary duties to the seller: reasonable care, undivided loyalty, confidentiality, full disclosure, obedience and duty to account. A seller’s
                                agent does not represent the interests of the buyer. The obligations of a seller’s agent are also subject to any specific provisions set forth in an agreement between the agent and the seller. In dealings
                                with the buyer, a seller’s agent should (a) exercise reasonable skill and care in performance of the agent’s duties; (b) deal honestly, fairly and in good faith; and (c) disclose all facts known to the agent
                                materially affecting the value or desirability of property, except as otherwise provided by law.
                            </p>
                        </div>
                        <div class="mb-15">
                            <h2 class="fs-15 m-0">Buyer’s Agent</h2>
                            <p>
                                A buyer’s agent is an agent who is engaged by a buyer to represent the buyer’s interest. The buyer’s agent does this by negotiating the purchase of a home at a price and on terms acceptable to the buyer. A
                                buyer’s agent has, without limitation, the following fiduciary duties to the buyer: reasonable care, undivided loyalty, confidentiality, full disclosure, obedience and duty to account. A buyer’s agent does
                                not represent the interest of the seller. The obligations of a buyer’s agent are also subject to any specific provisions set forth in an agreement between the agent and the buyer. In dealings with the seller,
                                a buyer’s agent should (a)
                            </p>
                        </div>
                    </td>
                    <td class="w-50 pl-3">
                        <p>
                            agent’s duties; (b) deal honestly, fairly and in good faith; and (c) disclose all facts known to the agent materially affecting the buyer’s ability and/or willingness to perform a contract to acquire seller’s
                            property that are not consistent with the agent’s fiduciary duties to the buyer.
                        </p>

                        <div class="mb-15">
                            <h2 class="fs-15 m-0">Broker’s Agents</h2>
                            <p>
                                A broker’s agent is an agent that cooperates or is engaged by a listing agent or a buyer’s agent (but does not work for the same firm as the listing agent or buyer’s agent) to assist the listing agent or
                                buyer’s agent in locating a property to sell or buy, respectively, for the listing agent’s seller or the buyer agent’s buyer. The broker’s agent does not have a direct relationship with the buyer or seller
                                and the buyer or seller cannot provide instructions or direction directly to the broker’s agent. The buyer and the seller therefore do not have vicarious liability for the acts of the broker’s agent. The
                                listing agent or buyer’s agent do provide direction and instruction to the broker’s agent and therefore the listing agent or buyer’s agent will have liability for the acts of the broker’s agent.
                            </p>
                        </div>

                        <div class="mb-15">
                            <h2 class="fs-15 m-0">Dual Agent</h2>
                            <p>
                                A real estate broker may represent both the buyer and the seller if both the buyer and seller give their informed consent in writing. In such a dual agency situation, the agent will not be able to provide the
                                full range of fiduciary duties to the buyer and seller. The obligations of an agent are also subject to any specific provisions set forth in an agreement between the agent, and the buyer and seller. An agent
                                acting as a dual agent must explain carefully to both the buyer and seller that the agent is acting for the other party as well. The agent should also explain the possible effects of dual representation,
                                including that by consenting to the dual agency relationship the buyer and seller are giving up their right to undivided loyalty. A buyer or seller should carefully consider the possible consequences of a
                                dual agency relationship before agreeing to such representation. A seller or buyer may provide advance informed consent to dual agency by indicating the same on this form.
                            </p>
                        </div>

                        <div class="mb-15">
                            <h2 class="fs-15 m-0">Dual Agent with Designated Sales Agents</h2>
                            <p>
                                If the buyer and seller provide their informed consent in writing, the principals and the real estate broker who represents both parties as a dual agent may designate a sales agent to represent the buyer and
                                another sales agent to represent the seller. A sales agent works under the supervision of the real estate broker. With the informed consent of the buyer and the seller in writing, the designated sales agent
                                for the buyer will function as the buyer’s agent representing the interests of and advocating on behalf of the buyer and the designated sales agent for the seller will
                            </p>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="page-footer">
                <table class="w-100 fs-13">
                    <tr>
                        <td class="w-50 pl-3">DOS-1736-f (Rev. 11/15)</td>
                        <td class="w-50 text-right pr-3">Page 1 of 2</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="page">
            <h1 class="w-100 fw-bold">New York State Disclosure Form for Buyer and Seller</h1>
            <table class="w-100">
                <tr>
                    <td class="w-50 pr-3">
                        <p>
                            function as the seller’s agent representing the interests of and advocating on behalf of the seller in the negotiations between the buyer and seller. A designated sales agent cannot provide the full range of
                            fiduciary duties to the landlord or tenant. A designated sales agent cannot provide full range of fiduciary duties to the buyer or seller. The designated sales agent must explain that like the dual agent
                        </p>
                    </td>
                    <td class="w-50 pl-3">
                        <p>
                            under whose supervision they function, they cannot provide undivided loyalty. A buyer or seller should carefully consider the possible consequences of a dual agency relationship with designated sales agents
                            before agreeing to such representation. A seller or buyer provide advance informed consent to dual agency with designated sales agents by indicating the same on this form
                        </p>
                    </td>
                </tr>
            </table>
            <div class="line-h-3 fs-13 mb-15">
                <span>This form was provided to me by</span>
                <span style="display: inline-block; position: relative;">
                    <input style="width: 230px;" class="input" type="text" name="license_name" value="{{ ( isset( $licenseService->license_name ) ) ? $licenseService->license_name : '' }}" required/>
                    <span class="input-text font-italic">(Print Name of Licensee)</span>
                </span>
                <span>of</span>
                <span style="display: inline-block; position: relative;">
                    <input style="width: 320px;" class="input" type="text" name="company_name" value="{{ ( isset( $licenseService->company_name ) ) ? $licenseService->company_name : '' }}" required/>
                    <span class="input-text font-italic">(Print Name of Company, Firm or Brokerage)</span>
                </span>
            </div>
            <div class="fs-13 mb-15">
                <div class="mb-15">a licensed real estate broker acting in the interest of the:</div>
                <table class="w-100 fs-13">
                    <tr>
                        <td class="w-50 text-center">
                            <div class="mb-10">
                                <label class="container">
                                    Seller as a (check relationship below)
                                    <input type="radio" name="acting" value="{{ ( isset( $licenseService->acting ) == 1 ) ? 'checked' : '' }}" required/>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div>
                                <div class="text-left" style="margin: auto; max-width: 150px;">
                                    <div>
                                        <label class="container sm-container">
                                            Seller’s Agent
                                            <input type="radio" value="Seller’s Agent" {{ ( isset( $licenseService->relationship ) == 'Seller’s Agent') ? 'checked' : '' }} name="relationship" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="container sm-container">
                                            Broker’s Agent<input type="radio" value="Broker’s Agent" {{ ( isset( $licenseService->relationship ) == 'Broker’s Agent') ? 'checked' : '' }} name="relationship" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="w-50 text-center text-center">
                            <label class="container">
                                Buyer as a (check relationship below)
                                <input type="radio" name="acting" value="2" {{ ( isset( $licenseService->acting ) == 2 ) ? 'checked' : '' }} required/>
                                <span class="checkmark"></span>
                            </label>

                            <div>
                                <div class="text-left" style="margin: auto; max-width: 150px;">
                                    <div>
                                        <label class="container sm-container">
                                            Buyer’s Agent<input type="radio" value="Buyer’s Agent" name="relationship" {{ ( isset( $licenseService->relationship ) == 'Buyer’s Agent' ) ? 'checked' : '' }} />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="container sm-container">
                                            Broker’s Agent
                                            <input type="radio" value="Broker’s Agent" name="relationship" {{ ( isset( $licenseService->relationship ) == 'Broker’s Agent' ) ? 'checked' : '' }}/>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div style="margin: auto; max-width: 290px;">
                                <div>
                                    <label class="container">
                                        Dual Agent
                                        <input type="radio" name="acting" value="3" {{ ( isset( $licenseService->acting ) == 3 ) ? 'checked' : '' }} required/>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div>
                                    <label class="container">
                                        Dual Agent with Designated Sales Agen
                                        <input type="radio" name="acting" value="4" {{ ( isset( $licenseService->acting ) == 4 ) ? 'checked' : '' }} required/>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mb-15 fs-13">
                <div class="mb-15">For advance informed consent to either dual agency or dual agency with designated sales agents complete section below:</div>
                <div class="text-left" style="margin: auto; max-width: 500px;">
                    <div>
                        <label class="container">
                            Advance Informed Consent Dual Agency
                            <input type="radio" name="dual_agency" value="1" {{ ( isset( $licenseService->dual_agency ) == 1 ) ? 'checked' : '' }} required/>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div>
                        <label class="container">
                            Advance Informed Consent to Dual Agency with Designated Sales Agents
                            <input type="radio" name="dual_agency" value="2" {{ ( isset( $licenseService->dual_agency ) == 2 ) ? 'checked' : '' }} required/>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="line-h-3 fs-13">
                <span>If dual agent with designated sales agents is indicated above:</span>
                <input style="width: 230px;" class="input" type="text" name="sales_agent" value="{{ ( isset( $licenseService->sales_agent ) ) ? $licenseService->sales_agent : '' }}" required/> <span>is appointed to represent the buyer; and</span>
                <input style="width: 230px;" class="input" type="text" name="buyer_name" value="{{ ( isset( $licenseService->buyer_name ) ) ? $licenseService->buyer_name : '' }}" required /> <span>is appointed to represent the seller in this transaction.</span>
            </div>
            <div class="line-h-3 fs-13 mb-15"><span>(I) (We)</span>
                <input style="width: 355px;" class="input" type="text" name="acknowledge" value="{{ ( isset( $licenseService->acknowledge ) ) ? $licenseService->acknowledge : '' }}" required/> <span>acknowledge receipt of a copy of this disclosure form:</span></div>
            <div class="fs-13">
                <span style="margin-right: 8px;">Signature of</span>
                <label class="container check-container" style="margin-right: 8px;">
                    Buyer(s) and/or
                    <input type="checkbox" name="signature_is_buyer" value="1" {{ ( isset( $licenseService->acknowledge ) == 1) ? 'checked' : '' }} required/>
                    <span class="checkmark"></span>
                </label>
                <label class="container check-container">
                    Seller(s)
                    <input type="checkbox" name="signature_is_seller" value="2" {{ ( isset( $licenseService->acknowledge ) == 2) ? 'checked' : '' }} required/>
                    <span class="checkmark"></span>
                </label>
            </div>
            <table class="w-100 line-h-3 fs-13">
                <tr>
                    <td class="w-50 pr-3">
                        <input class="input w-100" type="text" name="buyer_sign1" value="{{ ( isset( $licenseService->buyer_sign1 ) ) ? $licenseService->buyer_sign1 : '' }}" required />
                    </td>
                    <td class="w-50 pl-3">
                        <input class="input w-100" type="text" name="seller_sign1" value="{{ ( isset( $licenseService->seller_sign1 ) ) ? $licenseService->seller_sign1 : '' }}" />
                    </td>
                </tr>
                <tr>
                    <td class="w-50 pr-3">
                        <input class="input w-100" type="text" name="buyer_sign2" value="{{ ( isset( $licenseService->buyer_sign2 ) ) ? $licenseService->buyer_sign2 : '' }}"/>
                    </td>
                    <td class="w-50 pl-3">
                        <input class="input w-100" type="text" name="seller_sign2" value="{{ ( isset( $licenseService->seller_sign2 ) ) ? $licenseService->seller_sign2 : '' }}"/>
                    </td>
                </tr>
                <tr>
                    <td class="w-50 pr-3">Date: <input style="width: calc(100% - 40px);" class="input" type="text" name="buyer_date" value="{{ ( isset( $licenseService->buyer_date ) ) ? $licenseService->buyer_date : '' }}" /></td>
                    <td class="w-50 pl-3">Date: <input style="width: calc(100% - 40px);" class="input" type="text" name="seller_date" value="{{ ( isset( $licenseService->seller_date ) ) ? $licenseService->seller_date : '' }}"/></td>
                </tr>
            </table>
            <div class="page-footer">
                <table class="w-100 fs-13">
                    <tr>
                        <td class="w-50 pl-3">DOS-1736-f (Rev. 11/15)</td>
                        <td class="w-50 text-right pr-3">Page 2 of 2</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="page">
            <table class="w-100 fs-13">
                <tr>
                    <td class="w-50"><img class="mw-100" src="{{ asset('/') }}assets/front/licensing-service-pdf/logo.jpg" alt="img" /></td>
                    <td class="w-50 text-right fs-10">
                        <div>New York State</div>
                        <div class="fw-bold">Department of State, Division of Licensing Services</div>
                        <div>(518) 474-4429</div>
                        <div class="mb-10"><a class="text-blue" href="https://dos.ny.gov/">www.dos.ny.gov</a></div>
                        <div>New York State</div>
                        <div class="fw-bold">Division of Consumer Rights</div>
                        <div>(888) 392-3644</div>
                    </td>
                </tr>
            </table>
            <h1 class="w-100 fw-bold">New York State Housing Discrimination Disclosure Form</h1>
            <p class="fs-15 mb-15">
                Federal, State and local Fair Housing Laws provide comprehensive protections from discrimination in housing. It is unlawful for any property owner, landlord, property manager or other person who sells, rents or leases
                housing, to discriminate based on certain protected characteristics, which include, but are not limited to
                <strong>race, creed, color, national origin, sexual orientation, gender identity or expression, military status, sex, age, disability, marital status, lawful source of income or familial status.</strong> Real estate
                professionals must also comply with all Fair Housing Laws
            </p>

            <div class="fs-15"><strong>Real estate brokers and real estate salespersons, and their employees and agents violate the Law if they:</strong></div>
            <ul class="m-0 mb-15 fs-15">
                <li>Discriminate based on any protected characteristic when negotiating a sale, rental or lease, including representing that a property is not available when it is available.</li>
                <li>Negotiate discriminatory terms of sale, rental or lease, such as stating a different price because of race, national origin or other protected characteristic.</li>
                <li>Discriminate based on any protected characteristic because it is the preference of a seller or landlord.</li>
                <li>Discriminate by “steering” which occurs when a real estate professional guides prospective buyers or renters towards or away from certain neighborhoods, locations or buildings, based on any protected characteristic.</li>
                <li>
                    Discriminate by “blockbusting” which occurs when a real estate professional represents that a change has occurred or may occur in future in the composition of a block, neighborhood or area, with respect to any protected
                    characteristics, and that the change will lead to undesirable consequences for that area, such as lower property values, increase in crime, or decline in the quality of schools.
                </li>
                <li>Discriminate by pressuring a client or employee to violate the Law.</li>
                <li>Express any discrimination because of any protected characteristic by any statement, publication, advertisement, application, inquiry or any Fair Housing Law record.</li>
            </ul>
            <div><strong>YOU HAVE THE RIGHT TO FILE A COMPLAINT</strong></div>
            <div class="fs-15"><strong>If you believe you have been the victim of housing discrimination </strong> you should file a complaint with the New York State Division of Human Rights (DHR). Complaints may be filed by:</div>
            <ul class="m-0 mb-15 fs-15">
                <li>Downloading a complaint form from the DHR website: <a class="text-blue" href="https://dhr.ny.gov/">www.dhr.ny.gov</a>;</li>
                <li>
                    Stop by a DHR office in person, or contact one of the Division’s offices, by telephone or by mail, to obtain a complaint form and/or other assistance in filing a complaint. A list of office locations is available online
                    at: <a class="text-blue" href="https://dhr.ny.gov/contact-us">https://dhr.ny.gov/contact-us</a>, and the Fair Housing HOTLINE at (844)-862-8703.
                </li>
            </ul>
            <div class="fs-15">You may also file a complaint with the NYS Department of State, Division of Licensing Services. Complaints may be filed by:</div>
            <ul class="m-0 mb-15 fs-15">
                <li>Downloading a complaint form from the Department of State’s website <a class="text-black" href="https://www.dos.ny.gov/licensing/complaint_links.html">https://www.dos.ny.gov/licensing/complaint_links.html</a></li>
                <li>Stop by a Department’s office in person, or contact one of the Department’s offices, by telephone or by mail, to obtain a complaint form.</li>
                <li>Call the Department at (518) 474-4429.</li>
            </ul>
            <div class="fs-15">There is no fee charged to you for these services. It is unlawful for anyone to retaliate against you for filing a complaint.</div>
            <div class="page-footer">
                <table class="w-100 fs-13">
                    <tr>
                        <td class="w-50 pl-3">DOS-2156 (04/20)</td>
                        <td class="w-50 text-right pr-3">Page 1 of 2</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="page">
            <table class="w-100 fs-13">
                <tr>
                    <td class="w-50"><img class="mw-100" src="{{ asset('/') }}assets/front/licensing-service-pdf/logo.jpg" alt="img" /></td>
                    <td class="w-50 text-right fs-10">
                        <div>New York State</div>
                        <div class="fw-bold">Department of State, Division of Licensing Services</div>
                        <div>(518) 474-4429</div>
                        <div class="mb-10"><a class="text-blue" href="https://dos.ny.gov/">www.dos.ny.gov</a></div>
                        <div>New York State</div>
                        <div class="fw-bold">Division of Consumer Rights</div>
                        <div>(888) 392-3644</div>
                    </td>
                </tr>
            </table>
            <h1 class="w-100 fw-bold">New York State Housing Discrimination Disclosure Form</h1>
            <div>For more information on Fair Housing Act rights and responsibilities please visit</div>
            <div class="mb-15">
                <a class="text-blue" href="https://dhr.ny.gov/fairhousing">https://dhr.ny.gov/fairhousing</a> and
                <a class="text-blue" href="https://www.dos.ny.gov/licensing/fairhousing.html">https://www.dos.ny.gov/licensing/fairhousing.html</a>.
            </div>
            <div class="line-h-3">
                <span>This form was provided to me by</span>
                <input style="width: 230px;" class="input" type="text" name="sales_person" value="{{ ( isset( $licenseService->sales_person ) ) ? $licenseService->sales_person : '' }}" /> (print name of Real Estate Salesperson / Broker) of
                <input style="width: 230px;" class="input" type="text" name="brokerage_name" value="{{ ( isset( $licenseService->brokerage_name ) ) ? $licenseService->brokerage_name : '' }}" />(print name of Real Estate company, firm or brokerage)
            </div>
            <div class="line-h-3">
                <div><span>(I)(We)</span>
                    <input style="width: calc(100% - 78px);" class="input" type="text" name="consumer_name" value="{{ ( isset( $licenseService->consumer_name ) ) ? $licenseService->consumer_name : '' }}"/></div>
                <div>
                    (Real Estate Consumer/Seller/Landlord) acknowledge receipt of a copy of this disclosure form:
                </div>
                <div>
                    <span>Real Estate Consumer/Seller/Landlord Signature</span> <input style="width: 210px;" class="input" type="text" name="consumer_signature" /> <span>Date:</span>
                    <input style="width: 125px;" class="input" type="text" name="sign_date" value="{{ ( isset( $licenseService->sign_date ) ) ? $licenseService->sign_date : '' }}"/>
                </div>
                <div>Real Estate broker and real estate salespersons are required by New York State law to provide you with this Disclosure</div>
            </div>
            <div class="page-footer">
                <table class="w-100 fs-13">
                    <tr>
                        <td class="w-50 pl-3">DOS-2156 (04/20)</td>
                        <td class="w-50 text-right pr-3">Page 2 of 2</td>
                    </tr>
                </table>
            </div>
        </div>

</body>
</html>
