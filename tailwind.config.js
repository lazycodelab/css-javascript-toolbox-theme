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
				marquee: 'marquee 15s linear infinite',
				"small-blob": 'small-blob 2s linear infinite alternate',
				"small-blob-2": 'small-blob-2 2s linear infinite alternate',
				"small-blob-3": 'small-blob-3 2s linear infinite alternate',
				"small-blob-4": 'small-blob-4 2s linear infinite alternate',
				"small-blob-5": 'small-blob-5 2s linear infinite alternate',
			},
			keyframes: {
				marquee: {
					'0%': { transform: 'translateX(0%)' },
					'100%': { transform: 'translateX(-100%)' },
				},
				"small-blob": {
					'0%': { transform: 'translateX(0%)' },
					'50%': { transform: 'translateX(20%)' },
					'100%': { transform: 'translateY(-40%)' },
				},
				"small-blob-2": {
					'0%': { transform: 'translateX(0%)' },
					'50%': { transform: 'translateX(40%)' },
					'100%': { transform: 'translateY(-80%)' },
				},
				"small-blob-3": {
					'0%': { transform: 'translateX(0%)' },
					'50%': { transform: 'translateY(40%)' },
					'100%': { transform: 'translateX(-80%)' },
				},
				"small-blob-4": {
					'0%': { transform: 'translateX(0%)' },
					'50%': { transform: 'translateY(60%)' },
					'100%': { transform: 'translateX(-30%)' },
				},
				"small-blob-5": {
					'0%': { transform: 'translateY(0%)' },
					'50%': { transform: 'translateX(60%)' },
					'100%': { transform: 'translateY(-30%)' },
				},
			},
		},
	},
	plugins: [],
}

