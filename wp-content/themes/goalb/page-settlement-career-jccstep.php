<?php get_header(); ?>
<?php
$cust_code = isset($_GET['cust_code']) ? $_GET['cust_code'] : '';
$opportunity_Id = isset($_GET['opportunityId']) ? $_GET['opportunityId'] : '';
?>
<script type="text/javascript">
var custCode = "<?php echo $cust_code; ?>";
var opportunityId = "<?php echo $opportunity_Id; ?>";
</script>
<script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/bill/common.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function toggleVisibility(tabId) {
    var element = document.getElementById(tabId);

    switch (tabId) {
        case 'standard':
            document.getElementById('tab-standard').classList.add('is-active');
            document.getElementById('tab-premium').classList.remove('is-active');
            document.getElementById('plan-standard').style.display = 'block';
            document.getElementById('plan-premium').style.display = 'none';
            break;
        case 'premium':
            document.getElementById('tab-standard').classList.remove('is-active');
            document.getElementById('tab-premium').classList.add('is-active');
            document.getElementById('plan-standard').style.display = 'none';
            document.getElementById('plan-premium').style.display = 'block';
            break;
    }
}
</script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
<style id='global-styles-inline-css' type='text/css'>
body {
    --wp--preset--color--black: #000000;
    --wp--preset--color--cyan-bluish-gray: #abb8c3;
    --wp--preset--color--white: #ffffff;
    --wp--preset--color--pale-pink: #f78da7;
    --wp--preset--color--vivid-red: #cf2e2e;
    --wp--preset--color--luminous-vivid-orange: #ff6900;
    --wp--preset--color--luminous-vivid-amber: #fcb900;
    --wp--preset--color--light-green-cyan: #7bdcb5;
    --wp--preset--color--vivid-green-cyan: #00d084;
    --wp--preset--color--pale-cyan-blue: #8ed1fc;
    --wp--preset--color--vivid-cyan-blue: #0693e3;
    --wp--preset--color--vivid-purple: #9b51e0;
    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
    --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
    --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
    --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
    --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
    --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
    --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
    --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
    --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
    --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
    --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
    --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
    --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
    --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
    --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
    --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
    --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
    --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
    --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
    --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
    --wp--preset--font-size--small: 13px;
    --wp--preset--font-size--medium: 20px;
    --wp--preset--font-size--large: 36px;
    --wp--preset--font-size--x-large: 42px;
    --wp--preset--spacing--20: 0.44rem;
    --wp--preset--spacing--30: 0.67rem;
    --wp--preset--spacing--40: 1rem;
    --wp--preset--spacing--50: 1.5rem;
    --wp--preset--spacing--60: 2.25rem;
    --wp--preset--spacing--70: 3.38rem;
    --wp--preset--spacing--80: 5.06rem;
    --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
    --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
    --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
    --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
    --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
}

:where(.is-layout-flex) {
    gap: 0.5em;
}

body .is-layout-flow>.alignleft {
    float: left;
    margin-inline-start: 0;
    margin-inline-end: 2em;
}

body .is-layout-flow>.alignright {
    float: right;
    margin-inline-start: 2em;
    margin-inline-end: 0;
}

body .is-layout-flow>.aligncenter {
    margin-left: auto !important;
    margin-right: auto !important;
}

body .is-layout-constrained>.alignleft {
    float: left;
    margin-inline-start: 0;
    margin-inline-end: 2em;
}

body .is-layout-constrained>.alignright {
    float: right;
    margin-inline-start: 2em;
    margin-inline-end: 0;
}

body .is-layout-constrained>.aligncenter {
    margin-left: auto !important;
    margin-right: auto !important;
}

body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
    max-width: var(--wp--style--global--content-size);
    margin-left: auto !important;
    margin-right: auto !important;
}

body .is-layout-constrained>.alignwide {
    max-width: var(--wp--style--global--wide-size);
}

body .is-layout-flex {
    display: flex;
}

body .is-layout-flex {
    flex-wrap: wrap;
    align-items: center;
}

body .is-layout-flex>* {
    margin: 0;
}

:where(.wp-block-columns.is-layout-flex) {
    gap: 2em;
}

.has-black-color {
    color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-color {
    color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-color {
    color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-color {
    color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-color {
    color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-color {
    color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-color {
    color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-color {
    color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-color {
    color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-color {
    color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-color {
    color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-color {
    color: var(--wp--preset--color--vivid-purple) !important;
}

.has-black-background-color {
    background-color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-background-color {
    background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-background-color {
    background-color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-background-color {
    background-color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-background-color {
    background-color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-background-color {
    background-color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-background-color {
    background-color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-background-color {
    background-color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-background-color {
    background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-background-color {
    background-color: var(--wp--preset--color--vivid-purple) !important;
}

.has-black-border-color {
    border-color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-border-color {
    border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-border-color {
    border-color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-border-color {
    border-color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-border-color {
    border-color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-border-color {
    border-color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-border-color {
    border-color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-border-color {
    border-color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-border-color {
    border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-border-color {
    border-color: var(--wp--preset--color--vivid-purple) !important;
}

.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
    background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
}

.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
    background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
}

.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
}

.has-luminous-vivid-orange-to-vivid-red-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
}

.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
    background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
}

.has-cool-to-warm-spectrum-gradient-background {
    background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
}

.has-blush-light-purple-gradient-background {
    background: var(--wp--preset--gradient--blush-light-purple) !important;
}

.has-blush-bordeaux-gradient-background {
    background: var(--wp--preset--gradient--blush-bordeaux) !important;
}

.has-luminous-dusk-gradient-background {
    background: var(--wp--preset--gradient--luminous-dusk) !important;
}

.has-pale-ocean-gradient-background {
    background: var(--wp--preset--gradient--pale-ocean) !important;
}

.has-electric-grass-gradient-background {
    background: var(--wp--preset--gradient--electric-grass) !important;
}

.has-midnight-gradient-background {
    background: var(--wp--preset--gradient--midnight) !important;
}

.has-small-font-size {
    font-size: var(--wp--preset--font-size--small) !important;
}

.has-medium-font-size {
    font-size: var(--wp--preset--font-size--medium) !important;
}

.has-large-font-size {
    font-size: var(--wp--preset--font-size--large) !important;
}

.has-x-large-font-size {
    font-size: var(--wp--preset--font-size--x-large) !important;
}

.wp-block-navigation a:where(:not(.wp-element-button)) {
    color: inherit;
}

:where(.wp-block-columns.is-layout-flex) {
    gap: 2em;
}

.wp-block-pullquote {
    font-size: 1.5em;
    line-height: 1.6;
}

.l-header {
    display: none;
}
</style>
<main class="l-payment">
    <aside class="payment-sidebar">
        <img src="https://goal-b.co.jp/wordpress/wp-content/themes/goalb/assets/images/careerspeed/logo-02.png"
            alt="キャリスピロゴ" class="payment-sidebar__logo" />
    </aside>

    <div class="payment-main">
        <div class="payment-wrapper">
            <div class="payment-tab">
                <button id="tab-standard" class="payment-tab__item"
                    onclick="toggleVisibility('standard')">スタンダード</button>
                <button id="tab-premium" class="payment-tab__item is-active"
                    onclick="toggleVisibility('premium')">プレミアム</button>
            </div>

            <!-- スタンダードプラン -->
            <div id="plan-standard" class="payment-card">
                <div class="payment-card__plan-wrap">
                    <h2 class="payment-card__title">スタンダードプラン</h2>
                    <div class="payment-card__title-line"></div>
                    <p class="payment-card__description">セッション回数9回</p>
                    <p class="payment-card__description">(グループセッション4回 + 本セッション5回)</p>
                </div>

                <dic class="payment-card__price-wrap">
                    <h3 class="payment-card__price">580,800円<span>（税込み）</span></h3>
                    <hr class="payment-card__price-divider" />
                    <p class="payment-card__price-detail">プラン料金 498,000円 + <br class="payment-only-sp">入会金 33,000円</p>
                </dic>

                <button class="payment-card__button">
                    <a href="javascript:void(0);"
                        onclick="f_submit(custCode,opportunityId,'careerspeed-standard-jccstep','スタンダードプラン',580800)">決済画面に進む</a>
                </button>
            </div>

            <!-- プレミアムブレイクスループラン -->
            <div id="plan-premium" class="payment-card is-active">
                <div class="payment-card__plan-wrap">
                    <h2 class="payment-card__title">プレミアム<br class="payment-only-sp">ブレイクスループラン</h2>
                    <div class="payment-card__title-line"></div>
                    <p class="payment-card__description">セッション回数16回</p>
                    <p class="payment-card__description">(グループセッション4回 + 本セッション12回)</p>
                </div>

                <dic class="payment-card__price-wrap">
                    <h3 class="payment-card__price">913,000円<span>（税込み）</span></h3>
                    <hr class="payment-card__price-divider" />
                    <p class="payment-card__price-detail">プラン料金 800,000円 + <br class="payment-only-sp">入会金 33,000円</p>
                </dic>

                <button class="payment-card__button">
                    <a href="javascript:void(0);"
                        onclick="f_submit(custCode,opportunityId,'careerspeed-premium-jccstep','プレミアムブレイクスループラン',913000)">決済画面に進む</a>
                </button>
            </div>
        </div>
    </div>
</main>