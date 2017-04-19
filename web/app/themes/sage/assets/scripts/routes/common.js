import scrollReveal from '../components/scrollReveal/index';

export default {
	init() {
		// JavaScript to be fired on all pages
		scrollReveal('.scroll-reveal');
	},
	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
