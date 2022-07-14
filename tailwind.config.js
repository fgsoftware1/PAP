/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./src/**/*.{html,js,php}",
  "./src/**/**/*.{html,js,php}"
],
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
        'slate-900': '#0F172A',
        'gray-50': '#F9FAFB',
        'gray-300': '#D1D5DB',
        'gray-900': '#111827',
        'blue-500': '#2196f3',
        'dark-gray-700': '#455a64',
        'gray-600': '#757575',
        'gray-400': '#bdbdbd',
        'blue-900': '#0d47a1',
        'red-800': '#c62828',
        'gray-200': '#eeeeee',
        'zinc-700': '#3f3f46',
	},
	fontFamily: {
		'gulzar': ['Gulzar', 'serif'],
	}
  },
  plugins: [],
}
