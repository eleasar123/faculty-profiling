const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  // publicPath: process.env.NODE_ENV === 'production'
  //   ? '/production-sub-path/'
  //   : '/',
  // publicPath: process.env.NODE_ENV === 'production'
  // ? '/production-sub-path/'
  // : 'http://127.0.0.1:8000/',
  transpileDependencies: [
    'vuetify'
  ],
  devServer: {
    proxy: 'http://127.0.0.1:8000/',
  }
    
})
