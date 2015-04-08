/**
 * 提取参数
 *
 * 添加一个新的参数到函数的定义。确定默认。能生成JSDoc。
 *
 * Ctrl+Alt+P (Windows/Linux)
 * Alt+Command+P (Mac OS X)
 */

(function(namespace) {
    namespace.person = function (name) {
        var _name = name;

        this.greet = function () {
            // 1. 提取'Hello'字符串到一个叫做"greeting"的参数里。
            //    注意我们可以选择添加到哪一个父函数。
            //    添加到 greet()函数。
            //    勾选“Generator JSDoc”生成JSDoc注释。
            //    勾选“Optional Parameter”，IDE将会提供'Hello'作为默认值。
            return 'Hello' + ', ' + _name;
        }
    }
})(window.jetbrains = window.jetbrains || {});
