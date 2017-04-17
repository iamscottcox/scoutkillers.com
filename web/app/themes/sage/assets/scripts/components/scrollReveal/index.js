import ScrollReveal from 'scrollreveal';
import * as configs from './configs'

const sr = ScrollReveal();

const scrollReveal = (selector, config) => {

	let scrollRevealConfig = {};

	if (config) {

		scrollRevealConfig = config;

	} else {

		switch (selector) {
			default:
				scrollRevealConfig = configs.defaultConfig;
		}

	}

	sr.reveal(selector, scrollRevealConfig);

}

export default scrollReveal;

