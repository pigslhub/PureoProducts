var color = localStorage.getItem("color");
var dark = localStorage.getItem("dark");
var primary = localStorage.getItem("primary") || 'rgba(74, 75, 243, 1)';
var secondary = localStorage.getItem("secondary") || 'rgba(56, 184, 242, 1)';

window.endlessAdminConfig = {
	// Theme Color
	color: color,
	// Theme Primary Color
	primary: primary,
	// theme secondary color
	secondary: secondary,
	// theme dark
	dark: dark
};