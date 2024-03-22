/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./*.php', './template-parts/**/*.php'],
	theme: {
		fontFamily: {
			display: ['"Grifter Bold", sans-serif'],
			body: ['"Poppins", sans-serif'],
		},
		extend: {
			colors: {
				'brand-blue': '#005DA4',
				'brand-light-blue': '#DEF1FF',
				'brand-light-blue-2': '#EBF7FF',
			},
			boxShadow: {
				'neo-sm': '4px 4px'
			},
			animation: {
				marquee: 'marquee 25s linear infinite',
			},
			keyframes: {
				marquee: {
					'0%': { transform: 'translateX(0%)' },
					'100%': { transform: 'translateX(-100%)' },
				},
			},
		},
	},
	plugins: [],
}

