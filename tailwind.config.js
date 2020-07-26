const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {},
  purge: {
    content: [
      './assets/**/*.html',
      './assets/**/*.js',
      './assets/**/*.jsx',
      './assets/**/*.ts',
      './assets/**/*.tsx',
      './assets/**/*.vue',
      './system/user/templates/**/*.html'
    ],
    options: {
      defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
      whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
    },
  },
  plugins: [],
};
