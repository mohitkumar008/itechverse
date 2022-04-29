<?php
include '../includes/define.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>I-techverse</title>
    <?php include '../includes/topcss.php' ?>
</head>

<body>
    <!-- Navbar -->
    <?php include '../includes/navbar.php' ?>

    <!-- Banner -->
    <section class="">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo ASSET_IMG_URL; ?>banner/tally-product.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner ends -->

    <section class=" pad-b50 pad-t50 bg-gray-light service-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 flex-align-center">
                    <div class="ml50 no-ml-xs" data-aos="fade-right">
                        <h1 class="pad-b10 text-blue mb10">What is Tally Prime ?</h1>
                        <p>TallyPrime is a complete business management software for small and medium businesses. TallyPrime helps you manage accounting, inventory, banking, taxation, payroll, and much more to get rid of complexities, and in turn, focus on business growth. </p>
                        <h4 class="text-blue mt-1">Versions of TallyPrime :-</h4>
                        <ul class="mt-1 ml-4 list-disc">
                            <li class="mb-2"><b>TallyPrime Silver Edition is specifically designed for a single user</b> to provide simplified and faster account management</li>
                            <li><b>TallyPrime Gold</b> is designed for an unlimited number of users on the same LAN connection at the same time.</li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6 text-center flex-align-center" data-aos="flip-left">
                    <div class="row">
                        <div class="col-lg-6"><img src="<?php echo ASSET_IMG_URL; ?>Tally-Prime-Silver.png" class="img-fluid" alt="graphic-design-svg-image.png"></div>
                        <div class="col-lg-6"><img src="<?php echo ASSET_IMG_URL; ?>Tally-Prime-Gold.png" class="img-fluid" alt="graphic-design-svg-image.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tally-products pad-b50 pad-t50">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h3>Why go for tally prime ? </h3>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <ul class="tab d-flex justify-content-center" style="flex-wrap: wrap;">
                        <li>
                            <button class="tablinks" onclick="openTab(event, 'product-1')" id="defaultOpen">Invoicing & Accounting</button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openTab(event, 'product-2')">Inventory Management</button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openTab(event, 'product-3')">Taxation</button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openTab(event, 'product-4')">Banking</button>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 content">
                    <!-- Invoicing & Accounting -->
                    <div class="row tabcontent" id="product-1">
                        <div class="col-12 mb50">
                            <div class="row bg-grey pad50">
                                <div class="col-lg-6 col-md-12 ">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Invoicing & Accounting</h1>
                                        <p>We tell your story and get you recognized with powerful, wow graphics. We provide creative graphic design solutions by experimenting with words, symbols, and images. Our designers are masters of the latest trends, and they will create the perfect designs for you that folks will always remember. They spend time intensely understanding the business, identifying key speaking points, and finally creating powerful, “wow” graphics around them.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 ">
                                    <img src="<?php echo ASSET_IMG_URL; ?>gst-compliant-invoice-in-secs.jpg" class="img-fluid" alt="graphic-design-svg-image.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row ">
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>sell-and-buy.png" class="img-fluid" alt="sell-and-buy.png">
                                </div>
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Flexible Purchase And Sales Management</h1>
                                        <p>With TallyPrime the user doesn't have to follow different sales and purchase cycles. This software is crafted with complete flexibility to allow the user to manage different sales & purchase processes used by the business effortlessly with a complete order cycle. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row bg-grey ">
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Multiple Billing Format</h1>
                                        <p>Depending on the type of business you operate and the level of usage, you can opt for different billing modes that fit your business needs. You can choose the best-suited invoice format like “Item Invoice” for inventories, and “Voucher mode” for the “Dr Cr” way of recording invoices for smooth & faster billing. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>multiple-billing.png" class="img-fluid" alt="multiple-billing.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row ">
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>mutli-currency.png" class="img-fluid" alt="mutli-currency.png">
                                </div>
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Multi-Currency Support</h1>
                                        <p>With TallyPrime the user doesn't have to follow different sales and purchase cycles. This software is crafted with complete flexibility to allow the user to manage different sales & purchase processes used by the business effortlessly with a complete order cycle. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row bg-grey ">
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Multiple Price Level</h1>
                                        <p>You can generate any number of price levels in TallyPrime and it becomes effortless for businesses to maintain multiple price lists for products. Creating different price levels like Wholesaler, Retailer, Customer, etc leads to a fast and error-free filing by auto-capturing the appropriate prices & discounts in orders and invoices. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>multiple-billing.png" class="img-fluid" alt="multiple-billing.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Inventory Management -->
                    <div class="row tabcontent" id="product-2">
                        <div class="col-12 mb50">
                            <div class="row bg-grey pad50">
                                <div class="col-lg-6 col-md-12 ">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Inventory Management</h1>
                                        <p>If your business has multiple product lines and each product line needs segregation, you can do so easily with TallyPrime by defining unlimited groups, categories, batches, and locations/Godowns.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>Tally Services Banner.png" class="img-fluid w-50" alt="Tally Services Banner.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row ">
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>sell-and-buy.png" class="img-fluid" alt="sell-and-buy.png">
                                </div>
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Flexible Units Of Measure</h1>
                                        <p>Tally Prime seamlessly handles the complexity of quantifying items in more than one unit. With its flexible unit of measure, you can quantify and manage the stock in any way you want. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row bg-grey ">
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Reorder Level</h1>
                                        <p>You never run out of stock with TallyPrime using its re-order level feature. By setting the re-order level and minimum order level, you get to manage the sufficient stock to cater to customer orders, and also there is a check on accumulated stocks that do not sell. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>multiple-billing.png" class="img-fluid" alt="multiple-billing.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Taxation  -->
                    <div class="row tabcontent" id="product-3">
                        <div class="col-12 mb50">
                            <div class="row bg-grey pad50">
                                <div class="col-lg-6 col-md-12 ">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Taxation </h1>
                                        <h3>Making GST compliance and filing simpler for you</h3>
                                        <p>With Tally Prime, you can create professional-looking GST-compliant invoices in seconds. Whether it's generating different types of invoices, automatically generating e-invoices, or supporting regular product releases, it does it all
                                            to make compliance simpler for you. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 ">
                                    <img src="<?php echo ASSET_IMG_URL; ?>gst-compliant-invoice-in-secs.jpg" class="img-fluid" alt="graphic-design-svg-image.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row ">
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>sell-and-buy.png" class="img-fluid" alt="sell-and-buy.png">
                                </div>
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Fully Connected E-Way Bill Solution</h1>
                                        <p>With Tally Prime, you can smoothly
                                            Generate an EWB online along with an e-Invoice or distinctly.
                                            Generate an EWB for a single invoice or multiple invoices from a report, cancel, update & extend e-way bill online.
                                            Use other modes of EWB generation such as the offline utility, a direct entry into the portal, etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row bg-grey ">
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">GST Compliance & Filing </h1>
                                        <p>Tally Prime enables you to file GST in a simple and error-free manner. With its built-in capability of error detection, Tally Prime assures high accuracy in filing
                                            GST returns, whether it's for yourself or you share the data with your tax consultant. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>gst-comp.png" class="img-fluid" alt="gst-comp.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row ">
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>mutli-currency.png" class="img-fluid" alt="mutli-currency.png">
                                </div>
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Tally Prime provides comprehensive TDS & TCS solutions for your business needs </h1>
                                        <p>Tally Prime can manage the TDS and TCS requirements of your business in an accurate and simple manner. With its return forms that are designed to catch errors or incomplete information, Tally Prime lets you make corrections with ease and ensures a 100% accurate return. Managing TDS and TCS is no longer tedious. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row bg-grey pad10">
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Support For Previous Tax Regimes VAT/CST, Excise</h1>
                                        <p>With Tally Prime, you don't have to worry about managing data of previous year regimes. It’s effortless to manage data from both the previous and current tax regimes with Tally Prime and also examining transactions & getting a report for the complete financial year is no more burdensome.

                                            You can manage data from both the previous and current tax regimes in a single company.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>multiple-billing.png" class="img-fluid" alt="multiple-billing.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row ">
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>mutli-currency.png" class="img-fluid" alt="mutli-currency.png">
                                </div>
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">E-invoice</h1>
                                        <p>With TallyPrime’s e-invoicing solution, you can automatically generate and print e-invoices within seconds without human interference. The software comes with an alert mechanism system, support for the bulk generation of e-invoices, and e-invoice reports to make invoicing seamless for you. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row bg-grey ">
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">GST Compliance for composition dealers</h1>
                                        <p>Tally Prime makes it simpler to manage compliance for the businesses that choose composition schemes. From recording the Bill of Supply to generating GSTR-4/CMP-08 in the prescribed format, Tally makes it simpler and easier. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>multiple-billing.png" class="img-fluid" alt="multiple-billing.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Banking  -->
                    <div class="row tabcontent" id="product-4">
                        <div class="col-12 mb50">
                            <div class="row bg-grey pad50">
                                <div class="col-lg-6 col-md-12 ">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Banking </h1>
                                        <h3>TallyPrime for stress-free banking, for effortless banking</h3>
                                        <p>To give you a stress-free banking experience, TallyPrime comes with extensive banking features that help you manage all your banking tasks effortlessly.
                                            Using TallyPrime’s banking features such as auto bank reconciliation, predefined cheque formats, cheque management, e-payments, etc. makes banking a stress-free and smooth task.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>banking.png" class="img-fluid w-50" alt="banking.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row ">
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>sell-and-buy.png" class="img-fluid" alt="sell-and-buy.png">
                                </div>
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Auto Bank Reconciliation</h1>
                                        <p>Reconciling bank statements with an extended list of transactions is simplified now with the auto bank reconciliation feature of TallyPrime. TallyPrime supports bank reconciliation for more than 100 banks.
                                        </p>
                                        <p>With TallyPrime, you can:</p>
                                        <ul style="list-style: disc;" class="ml-5">
                                            <li>Check accuracy of reconciliation</li>
                                            <li>Recover reconciliation of any date</li>
                                            <li>Auto Bank Reconciliation</li>
                                            <li>Reconcile manually </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row bg-grey ">
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Generate Cash Deposit Slips and Payment Advice</h1>
                                        <p>Generation of cash and cheque deposit slips for the transactions of a particular day or period and payment advice to the suppliers or other parties, all can be done hassle-freely with Tally Prime. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>multiple-billing.png" class="img-fluid" alt="multiple-billing.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb50">
                            <div class="row ">
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>cheque.png" class="img-fluid" alt="cheque.png">
                                </div>
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">Cheque Management </h1>
                                        <p>Tally Prime lets you maintain multiple checkbooks through its effective cheque management system that consists of pre-defined cheque formats, and a cheque register feature to view and track cheque details. It all cuts down on manual errors & speeds up the data entry process for you. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row bg-grey pad10">
                                <div class="col-lg-6 col-md-12 flex-align-center">
                                    <div class="no-ml-xs" data-aos="fade-up">
                                        <h1 class="pad-b10 text-blue mb10">e-Payments </h1>
                                        <p>The e-payments feature of TallyPrime enables you to make fast, safe, and secure banking transactions sitting at home. While saving your time and effort, you can make payments through e-Fund Transfer, Electronic Cheque, or Electronic DD/PO and through various other modes of fund transfer such as NEFT, RTGS, Same Bank transfer.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 text-center">
                                    <img src="<?php echo ASSET_IMG_URL; ?>e-payment.png" class="img-fluid w-50" alt="e-payment.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>




    <section class="pad50 call-to-action-2 parallax pos-relative" style="background-image: url(<?php echo ASSET_IMG_URL; ?>itech-2.png);">
        <div class="container pos-relative">
            <div class="row text-left">
                <div class="col-md-12 text-center">
                    <h3 class="pad-b20">LET’S WORK <span>TOGETHER</span> ON YOUR PROJECT</h3>
                    <div class="col-md-12 no-padding mb-md-20">
                        <a href="<?php echo SITE_ROOT_URL; ?>contact" class="btn btn-primary mt20">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-overlay dark"></div>
    </section>

    <script>
        function openTab(evt, Services) {
            console.log("openTab");
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // document.getElementById(arrows).style.display = "block";
            document.getElementById(Services).style.display = "block";
            evt.currentTarget.className += " active";

        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <script>
        window.onload = function() {
            $("#tally").addClass("active");
        }
    </script>
    <?php include '../includes/footer.php' ?>
    <?php include '../includes/bottomjs.php' ?>
</body>

</html>