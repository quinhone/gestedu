'use strict';

Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.ClassStudent = undefined;

require('vue-resource');

var _adminConfig = require('./adminConfig');

var _adminConfig2 = _interopRequireDefault(_adminConfig);

var _vue = require('vue');

var _vue2 = _interopRequireDefault(_vue);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

_vue2.default.http.headers.common['X-CSRF-Token'] = $("meta[name=csrf-token]").attr('content');

var ClassStudent = _vue2.default.resource(_adminConfig2.default.ADMIN_URL + '/class_informations/{class_information}/students/{student}');

exports.ClassStudent = ClassStudent;
//# sourceMappingURL=resources.js.map