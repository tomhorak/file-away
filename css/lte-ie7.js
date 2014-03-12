/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'ssfm-icons\'">' + entity + '</span>' + html;
	}
	var icons = {
			'ssfa-icon-quill' : '&#x5f;',
			'ssfa-icon-blog' : '&#x61;',
			'ssfa-icon-paint-format' : '&#x62;',
			'ssfa-icon-home' : '&#x59;',
			'ssfa-icon-home-2' : '&#x5b;',
			'ssfa-icon-home-3' : '&#x5a;',
			'ssfa-icon-headphones' : '&#x44;',
			'ssfa-icon-book' : '&#x69;',
			'ssfa-icon-profile' : '&#xe003;',
			'ssfa-icon-tag' : '&#x6e;',
			'ssfa-icon-envelop' : '&#x70;',
			'ssfa-icon-cart' : '&#xe005;',
			'ssfa-icon-cart-2' : '&#x73;',
			'ssfa-icon-cart-3' : '&#x72;',
			'ssfa-icon-compass' : '&#xe021;',
			'ssfa-icon-clock' : '&#xe01d;',
			'ssfa-icon-clock-2' : '&#xe01c;',
			'ssfa-icon-print' : '&#xe015;',
			'ssfa-icon-disk' : '&#xe028;',
			'ssfa-icon-bubble' : '&#xe03a;',
			'ssfa-icon-bubble-2' : '&#xe037;',
			'ssfa-icon-user' : '&#xe034;',
			'ssfa-icon-users' : '&#xe033;',
			'ssfa-icon-quotes-left' : '&#xe02e;',
			'ssfa-icon-search' : '&#xe047;',
			'ssfa-icon-zoom-in' : '&#xe048;',
			'ssfa-icon-zoom-out' : '&#xe049;',
			'ssfa-icon-expand' : '&#xe04a;',
			'ssfa-icon-contract' : '&#xe04b;',
			'ssfa-icon-expand-2' : '&#xe04c;',
			'ssfa-icon-key' : '&#xe04d;',
			'ssfa-icon-unlocked' : '&#xe05e;',
			'ssfa-icon-lock' : '&#xe05f;',
			'ssfa-icon-settings' : '&#xe05c;',
			'ssfa-icon-equalizer' : '&#xe05b;',
			'ssfa-icon-cog' : '&#xe05a;',
			'ssfa-icon-cogs' : '&#xe059;',
			'ssfa-icon-cog-2' : '&#xe058;',
			'ssfa-icon-wrench' : '&#xe05d;',
			'ssfa-icon-pie' : '&#xe053;',
			'ssfa-icon-stats' : '&#xe052;',
			'ssfa-icon-bars' : '&#xe051;',
			'ssfa-icon-bars-2' : '&#xe050;',
			'ssfa-icon-fire' : '&#xe06c;',
			'ssfa-icon-remove' : '&#xe070;',
			'ssfa-icon-switch' : '&#xe07b;',
			'ssfa-icon-eye' : '&#xe090;',
			'ssfa-icon-eye-blocked' : '&#xe08f;',
			'ssfa-icon-link' : '&#xe08b;',
			'ssfa-icon-attachment' : '&#xe08d;',
			'ssfa-icon-flag' : '&#xe08c;',
			'ssfa-icon-arrow-up-left' : '&#xe0d9;',
			'ssfa-icon-arrow-up' : '&#xe0d8;',
			'ssfa-icon-arrow-up-right' : '&#xe0e9;',
			'ssfa-icon-arrow-right' : '&#xe0ea;',
			'ssfa-icon-arrow-down-right' : '&#xe0eb;',
			'ssfa-icon-arrow-down' : '&#xe0ec;',
			'ssfa-icon-arrow-down-left' : '&#xe0ed;',
			'ssfa-icon-arrow-left' : '&#xe0ee;',
			'ssfa-icon-checkbox-unchecked' : '&#xe0ff;',
			'ssfa-icon-checkbox-partial' : '&#xe100;',
			'ssfa-icon-google' : '&#xe128;',
			'ssfa-icon-google-plus' : '&#xe129;',
			'ssfa-icon-google-plus-2' : '&#xe12a;',
			'ssfa-icon-google-plus-3' : '&#xe12b;',
			'ssfa-icon-google-plus-4' : '&#xe12c;',
			'ssfa-icon-facebook' : '&#xe12d;',
			'ssfa-icon-facebook-2' : '&#xe12e;',
			'ssfa-icon-facebook-3' : '&#xe12f;',
			'ssfa-icon-instagram' : '&#xe130;',
			'ssfa-icon-twitter' : '&#xe131;',
			'ssfa-icon-twitter-2' : '&#xe132;',
			'ssfa-icon-twitter-3' : '&#xe133;',
			'ssfa-icon-feed' : '&#xe134;',
			'ssfa-icon-feed-2' : '&#xe135;',
			'ssfa-icon-feed-3' : '&#xe136;',
			'ssfa-icon-vimeo' : '&#xe137;',
			'ssfa-icon-vimeo2' : '&#xe147;',
			'ssfa-icon-vimeo-2' : '&#xe146;',
			'ssfa-icon-flickr' : '&#xe144;',
			'ssfa-icon-flickr-2' : '&#xe143;',
			'ssfa-icon-flickr-3' : '&#xe142;',
			'ssfa-icon-yahoo' : '&#xe156;',
			'ssfa-icon-tumblr' : '&#xe155;',
			'ssfa-icon-tumblr-2' : '&#xe154;',
			'ssfa-icon-blogger' : '&#xe153;',
			'ssfa-icon-blogger-2' : '&#xe152;',
			'ssfa-icon-wordpress' : '&#xe14f;',
			'ssfa-icon-wordpress-2' : '&#xe14e;',
			'ssfa-icon-github' : '&#xe14d;',
			'ssfa-icon-github-2' : '&#xe14c;',
			'ssfa-icon-android' : '&#xe167;',
			'ssfa-icon-windows' : '&#xe166;',
			'ssfa-icon-windows8' : '&#xe165;',
			'ssfa-icon-skype' : '&#xe162;',
			'ssfa-icon-linkedin' : '&#xe160;',
			'ssfa-icon-stackoverflow' : '&#xe15a;',
			'ssfa-icon-pinterest' : '&#xe159;',
			'ssfa-icon-pinterest-2' : '&#xe175;',
			'ssfa-icon-paypal' : '&#xe16b;',
			'ssfa-icon-paypal-2' : '&#xe16d;',
			'ssfa-icon-firefox' : '&#xe174;',
			'ssfa-icon-IE' : '&#xe173;',
			'ssfa-icon-opera' : '&#xe172;',
			'ssfa-icon-safari' : '&#xe171;',
			'ssfa-icon-IcoMoon' : '&#xe170;',
			'ssfa-icon-mic' : '&#xe17e;',
			'ssfa-icon-comment' : '&#xe17d;',
			'ssfa-icon-info' : '&#x4e;',
			'ssfa-icon-type' : '&#xe197;',
			'ssfa-icon-mouse' : '&#xe1ad;',
			'ssfa-icon-ampersand' : '&#xe1b8;',
			'ssfa-icon-paperclip' : '&#xe1d0;',
			'ssfa-icon-check-alt' : '&#xe20f;',
			'ssfa-icon-x-altx-alt' : '&#xe211;',
			'ssfa-icon-denied' : '&#xe212;',
			'ssfa-icon-arrow-left-2' : '&#xe24b;',
			'ssfa-icon-arrow-right-2' : '&#xe24e;',
			'ssfa-icon-arrow-up-2' : '&#xe251;',
			'ssfa-icon-arrow-down-2' : '&#xe254;',
			'ssfa-icon-arrow-down-alt1' : '&#xe255;',
			'ssfa-icon-arrow-up-alt1' : '&#xe253;',
			'ssfa-icon-arrow-left-alt1' : '&#xe24c;',
			'ssfa-icon-headphones-2' : '&#xe25a;',
			'ssfa-icon-microphone' : '&#xe259;',
			'ssfa-icon-left-quote' : '&#xe280;',
			'ssfa-icon-right-quote' : '&#xe26a;',
			'ssfa-icon-hash' : '&#xe26b;',
			'ssfa-icon-question-mark' : '&#xe26d;',
			'ssfa-icon-info-2' : '&#xe26e;',
			'ssfa-icon-ampersand-2' : '&#xe26f;',
			'ssfa-icon-at' : '&#xe270;',
			'ssfa-icon-file-pdf' : '&#x21;',
			'ssfa-icon-file-openoffice' : '&#x22;',
			'ssfa-icon-file-word' : '&#x23;',
			'ssfa-icon-file-excel' : '&#x24;',
			'ssfa-icon-file-xml' : '&#x25;',
			'ssfa-icon-file-powerpoint' : '&#x26;',
			'ssfa-icon-file-zip' : '&#x27;',
			'ssfa-icon-file-css' : '&#x28;',
			'ssfa-icon-libreoffice' : '&#x29;',
			'ssfa-icon-file' : '&#x2a;',
			'ssfa-icon-document-alt-fill' : '&#x2b;',
			'ssfa-icon-document-alt-stroke' : '&#x2c;',
			'ssfa-icon-file-2' : '&#x2d;',
			'ssfa-icon-file-3' : '&#x2e;',
			'ssfa-icon-file-4' : '&#x2f;',
			'ssfa-icon-file-5' : '&#x30;',
			'ssfa-icon-image' : '&#x31;',
			'ssfa-icon-image-2' : '&#x32;',
			'ssfa-icon-images' : '&#x33;',
			'ssfa-icon-picture' : '&#x34;',
			'ssfa-icon-image-3' : '&#x35;',
			'ssfa-icon-camera' : '&#x36;',
			'ssfa-icon-camera-2' : '&#x37;',
			'ssfa-icon-film' : '&#x38;',
			'ssfa-icon-youtube' : '&#x39;',
			'ssfa-icon-play' : '&#x3a;',
			'ssfa-icon-youtube-2' : '&#x3b;',
			'ssfa-icon-camera-3' : '&#x3c;',
			'ssfa-icon-drawer' : '&#x3d;',
			'ssfa-icon-drawer-2' : '&#x3e;',
			'ssfa-icon-cabinet' : '&#x3f;',
			'ssfa-icon-google-drive' : '&#x40;',
			'ssfa-icon-music' : '&#x41;',
			'ssfa-icon-music-2' : '&#x42;',
			'ssfa-icon-headphones' : '&#x43;',
			'ssfa-icon-headphones-2' : '&#x44;',
			'ssfa-icon-box-remove' : '&#x45;',
			'ssfa-icon-box-add' : '&#x46;',
			'ssfa-icon-embed' : '&#x47;',
			'ssfa-icon-code' : '&#x48;',
			'ssfa-icon-code-2' : '&#x49;',
			'ssfa-icon-minus' : '&#x4a;',
			'ssfa-icon-plus' : '&#x4b;',
			'ssfa-icon-chart-alt' : '&#x4c;',
			'ssfa-icon-chart' : '&#x4d;',
			'ssfa-icon-info' : '&#x4e;',
			'ssfa-icon-checkmark' : '&#x4f;',
			'ssfa-icon-cancel' : '&#x50;',
			'ssfa-icon-inbox' : '&#x51;',
			'ssfa-icon-console' : '&#x52;',
			'ssfa-icon-console-2' : '&#x53;',
			'ssfa-icon-apple' : '&#x54;',
			'ssfa-icon-finder' : '&#x55;',
			'ssfa-icon-database' : '&#x56;',
			'ssfa-icon-film-2' : '&#x57;',
			'ssfa-icon-key' : '&#x58;',
			'ssfa-icon-contract-2' : '&#xe04e;',
			'ssfa-icon-arrow-left-3' : '&#xe0f5;',
			'ssfa-icon-arrow-down-left-2' : '&#xe10a;',
			'ssfa-icon-arrow-down-3' : '&#xe0f4;',
			'ssfa-icon-arrow-down-right-2' : '&#xe0f3;',
			'ssfa-icon-arrow-right-3' : '&#xe0f2;',
			'ssfa-icon-arrow-up-right-2' : '&#xe0f1;',
			'ssfa-icon-arrow-up-3' : '&#xe0f0;',
			'ssfa-icon-arrow-up-left-2' : '&#xe0ef;',
			'ssfa-icon-radio-unchecked' : '&#xe101;',
			'ssfa-icon-radio-checked' : '&#xe102;',
			'ssfa-icon-mail' : '&#xe124;',
			'ssfa-icon-paypal-3' : '&#xe16e;',
			'ssfa-icon-stumbleupon' : '&#xe15b;',
			'ssfa-icon-chrome' : '&#xe176;',
			'ssfa-icon-arrow-right-alt1' : '&#xe24f;',
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/ssfa-icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};