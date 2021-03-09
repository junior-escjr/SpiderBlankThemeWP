const publicStaticDir = '../static/';
const publicCssDir = publicStaticDir + 'css/';
const publicJsDir  = publicStaticDir + 'js/';

const sourceCodeDir = '../src/';
const sourceCodeCssDir = sourceCodeDir + 'sass/';
const sourceCodeJsDir  = sourceCodeDir + 'js/';

module.exports =  {
    path: {
        staticCss: publicCssDir,
        staticJS: publicJsDir,

        srcCss:    sourceCodeCssDir,
        srcJs:    sourceCodeJsDir
    }
};