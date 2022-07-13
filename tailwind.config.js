/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {},
	colors: {
		'cor1': '#E05A3F',
		'cor2': '#E0CE26',
		'cor3': '#E06C55',
		'cor4': '#3FE0A1',
		'cor5': '#6B4AE0',
		'cor6': '#0000FF',
		'cor7': '#FFFFFF',
        'red': '#FF0000',
        'gray': '#D3D3D3',
        'dark-gray': '#A9A9A9',
        'pink-400': '#ec407a',
        'orange-500': '#ff9800',
	},
	fontFamily: {
		'gulzar': ['Gulzar', 'serif'],
	}
  },
  plugins: [],
}
