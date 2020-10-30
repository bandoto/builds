<?php
require_once(__DIR__ . '/../../../vendor/autoload.php');

use Carbon\Carbon;

$created_at = Carbon::now()->format('Y');
?>

<?php wp_footer(); ?>
		<footer class="footer">
			<div class="container">
				<div class="footer_row">
					<div class="footer__text">Ukraine 2000-2015</div>
					<div class="footer__actions">
						<a href="" class="footer__link"><img src="/test-fullstack/wp-content/themes/twentynineteen/dist/img/icons/01.png" alt=""></a>
						<a href="" class="footer__link"><img src="/test-fullstack/wp-content/themes/twentynineteen/dist/img/icons/02.png" alt=""></a>
						<a href="" class="footer__link"><img src="/test-fullstack/wp-content/themes/twentynineteen/dist/img/icons/03.png" alt=""></a>
					</div>
				</div>
			</div>
		</footer>
	    </main>
    </div>

<script type='text/javascript' src='/test-fullstack/wp-content/themes/twentynineteen/dist/index.js'></script>

</body>
</html>
