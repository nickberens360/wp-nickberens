/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'fonts3\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icons-arrow-down' : '&#xe000;',
			'icons-arrow-right' : '&#xe001;',
			'icons-arrow-up' : '&#xe002;',
			'icons-arrow-up-left' : '&#xe003;',
			'icons-arrow-up-right' : '&#xe004;',
			'icons-arrow-down-right' : '&#xe005;',
			'icons-arrow-left' : '&#xe006;',
			'icons-arrow-down-left' : '&#xe007;',
			'icons-pencil' : '&#xe008;',
			'icons-home' : '&#xe009;',
			'icons-user' : '&#xe00a;',
			'icons-mail' : '&#xe00b;',
			'icons-briefcase' : '&#xe00c;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
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
		c = c.match(/icons-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};