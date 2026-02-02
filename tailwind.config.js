import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
                display: ['Cormorant Garamond', 'Georgia', 'serif'],
            },
            colors: {
                cream: {
                    50: '#fdfcfb',
                    100: '#f9f7f4',
                    200: '#f2ede6',
                    300: '#e8e0d5',
                },
                sage: {
                    50: '#f0f5f2',
                    100: '#dce8e1',
                    200: '#b8d1c3',
                    300: '#8bb39e',
                    400: '#5c8f72',
                    500: '#3d7357',
                    600: '#2f5a44',
                    700: '#284837',
                    800: '#223a2e',
                    900: '#1e3229',
                },
                gold: {
                    50: '#fdf9f0',
                    100: '#f9efd8',
                    200: '#f2dcb0',
                    300: '#e9c47d',
                    400: '#dea54a',
                    500: '#d68c2a',
                    600: '#c26f1f',
                    700: '#a1541c',
                    800: '#83431e',
                    900: '#6b381b',
                },
                ink: {
                    50: '#f6f6f7',
                    100: '#e2e2e5',
                    200: '#c4c4ca',
                    300: '#9f9fa8',
                    400: '#7a7a86',
                    500: '#5f5f6b',
                    600: '#4a4a54',
                    700: '#3d3d45',
                    800: '#25252b',
                    900: '#18181b',
                },
            },
            boxShadow: {
                'glow': '0 0 40px -12px rgba(61, 115, 87, 0.35)',
                'glow-soft': '0 0 60px -20px rgba(61, 115, 87, 0.2)',
                'card': '0 4px 24px -4px rgba(24, 24, 27, 0.06), 0 8px 48px -8px rgba(24, 24, 27, 0.04)',
                'card-hover': '0 12px 40px -8px rgba(24, 24, 27, 0.12), 0 24px 64px -16px rgba(24, 24, 27, 0.08)',
                'elevated': '0 20px 50px -12px rgba(24, 24, 27, 0.15)',
            },
            animation: {
                'fade-in': 'fadeIn 0.6s ease-out forwards',
                'float': 'float 8s ease-in-out infinite',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0', transform: 'translateY(12px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-8px)' },
                },
            },
        },
    },

    plugins: [forms],
};
