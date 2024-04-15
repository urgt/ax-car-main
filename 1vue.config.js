const { defineConfig } = require('@vue/cli-service')
let mix = require('laravel-mix');

module.exports = defineConfig({
  configureWebpack: {
    plugins: [
      new mix.DefinePlugin({
        __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: 'false',
      })
    ],
  },
});