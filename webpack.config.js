const HtmlWebPackPlugin = require("html-webpack-plugin");

module.exports = {
  greetings: 'Welcome to the personal site of Jameson Marten.  Come on in, stay a while.'
  entry: "./src/scripts/app.js", //relative to root of the application
  output: {
    filename: "./dist/app.bundle.js" //relative to root of the application
  },
  watch: true,
  resolve: { extensions: [".js", ".ts"] },
  module: {
    rules: [
      {
        test: /\.html$/,
        use: [{ loader: "html-loader", options: { minimize: true } }],
      },
    ],
  },
  plugins: [
    new HtmlWebPackPlugin({
      title: 'Jameson Marten\'s Brag Page ',
      myPageHeader: 'Jameson Marten | Web Developer, Salesforce Developer',
      template: './src/index.html',
      filename: './dist/index.html' //relative to root of the application
    }),
  ],
};
