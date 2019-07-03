<?php $ptitle = "Fast Stairs Calculator - mobile app"; ?>
<?php $pdescription = "Stairs calculator a perfect app to help people building stairs. Android mobile app with exceptional user experience."; ?>
<?php $pkeyword = "stairs claculator, stair calculator, android developer, mobile app developer"; ?>
<?php $pcanonical = "http://www.pixiefan.eu/stairs-calculator"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/pixiefan.eu/inc/head-app.php'; ?>

<section>
	<div class="container app-presentation">
		<h2>Fast Stairs Calculator</h2>
		<div class="row">
            <div class="app-col-1x">
                <div class="install-app">
                    <img src="images/stairs/Icon.jpg" alt="Stairs calculator android app">
                    <a href="https://play.google.com/store/apps/details?id=com.simplestairs.stairscalculator&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img alt="Get it on Google Play" src="images/google-play-badge.png"/></a>
                </div>

            </div>
            <div class="app-col-2x">
                <p>Stairs Calculator is the best all in one calculator for stairs. The most complete stairs calculator from the market for mobile devices. Give this one a try, you will never be disappointed.
                    All you need for straight stairs, spiral staircase, wood stairs, stairs on stringer, or stairs in L and U turn, from wood or concrete fast and easy and is totally FREE. 
                </p> 
                <p>  
                    All in one stairs calculator for home use is the best stair calculator. Very useful for builders, handymen, contractors, architects, etc.
                    Detailed and accurate calculation of stair treads and risers, straight stairs, spiral staircase, stairs on L and U turn.
                </p>

            </div>
        </div>
        <div class="row">
            <div class= "col-demo-calculator">
                <form action="">
                    <div class="row-demo-single">
                        <p>H</p>
                        <p class="stair-obj">Total rise</p>
                        <p class="input-stair"><input type="number" name="Name" placeholder="0"></p>
                        <p>cm</p>
                    </div>
                    <div class="row-demo-single">
                        <p>H</p>
                        <select class="stair-select">
                            <option value="audi" selected>Number of steps</option>
                            <option value="volvo">Average riser height</option>
                        </select>
                        <p class="input-stair"><input type="text" name="Name" placeholder="0"></p>
                        <p>cm</p>
                    </div>
                    <div class="row-demo-single">
                        <p>H</p>
                        <select class="stair-select">
                            <option value="audi" selected>Total run</option>
                            <option value="volvo">Tread depth</option>
                        </select>
                        <p class="input-stair"><input type="text" name="Name" placeholder="0"></p>
                        <p>cm</p>
                    </div>
                    <div class="row-demo-single">
                        <p>H</p>
                        <p class="stair-obj">Tread width</p>
                        <p class="input-stair"><input type="text" name="Name" placeholder="0"></p>
                        <p>cm</p>
                    </div>
                    <div class="row-demo-single">
                        <p>H</p>
                        <p class="stair-obj">Tread thickness</p>
                        <p class="input-stair"><input type="text" name="Name" placeholder="0"></p>
                        <p>cm</p>
                    </div>
                    <div class="row-demo-single">
                        <p>H</p>
                        <p class="stair-obj">Riser thickness</p>
                        <p class="input-stair"><input type="text" name="Name" placeholder="0"></p>
                        <p>cm</p>
                    </div>
                    <div class="row-demo-single">
                        <p>H</p>
                        <p class="stair-obj">Nosing</p>
                        <p class="input-stair"><input type="text" name="Name" placeholder="0"></p>
                        <p>cm</p>
                    </div>
                    <div class="row-buttons">
                        <select class="select-units">
                            <option value="audi" selected>Inches</option>
                            <option value="volvo">Centimeters</option>
                            <option value="volvo">Milimeters</option>
                        </select>
                        <button class="btn-calculate">CALCULATE</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="div-line"></div>

	</div>
</section>
<!-- ==================\\\ End Section App Presentation ///================== -->

<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/pixiefan.eu/inc/footer.php'; ?>