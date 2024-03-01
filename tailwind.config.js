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
			'brand-light-blue': '#DEF1FF'
		},
		boxShadow: {
			'neo-sm': '4px 4px'
		},
	},
  },
  plugins: [],
}

