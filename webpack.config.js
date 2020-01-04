const HtmlWebPackPlugin = require("html-webpack-plugin");
module.exports = {
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
      template: "src/home/home.html",
      filename: "src/home/home.html",
    }),
  ],
};
