</div>
				</div>
			</main>
			
			<nav id="nav">
				<div class="innertube">
					<h3><a href="index.php">Home</a></h3>
				</div>
				<div class="innertube">
					<h3>XSS</h3>
					<ul>
						<li><a href="xss2.php">Persistent XSS</a></li>
						<li><a href="xss1.php">Non-Persistent XSS</a></li>
						<li><a href="#">DOM XSS</a></li>
											</ul>
									</div>
									<div class="innertube">
					<h3>SQL Injection</h3>
					<ul>
						<li><a href="sql_login.php">Login Example</a></li>
						<li><a href="sql_account_balance.php">Find Account Balanace</a></li>
											</ul>
									</div>
									<div class="innertube">
					<h3>Insecure Direct Object References</h3>
					<ul>
						<li><a href="idor1.php">Get the Account Balance for Other Users</a></li>
						
											</ul>
									</div>
									
									<?php
				if(isset($_SESSION['user'] )){
					?>
									<div class="innertube">
					<h3>Remote Code Execution(RCE)</h3>
					<ul>
						<li><a href="rce1.php">Simple RCE Example</a></li>
						
											</ul>
									</div>
									<div class="innertube">
					<h3>SSRF</h3>
					<ul>
						<li><a href="rce1.php">Example1</a></li>
						
											</ul>
									</div>
				<?php } ?>
			</nav>
		
		</div>
		
		<footer id="footer">
			<div class="innertube">
				<p>Made for Vulnerabilities</p>
			</div>
		</footer>
	
	</body>
</html>
