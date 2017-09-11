'use strict';

Object.defineProperty(exports, "__esModule", {
    value: true
});

var _vuex = require('vuex');

var _vuex2 = _interopRequireDefault(_vuex);

var _class_student = require('./class_student');

var _class_student2 = _interopRequireDefault(_class_student);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = new _vuex2.default.Store({
    modules: {
        classStudent: _class_student2.default
    }
});
//# sourceMappingURL=store.js.map