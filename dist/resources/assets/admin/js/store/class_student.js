'use strict';

Object.defineProperty(exports, "__esModule", {
    value: true
});

var _resources = require('../services/resources');

var _vue = require('vue');

var _vue2 = _interopRequireDefault(_vue);

var _adminConfig = require('../services/adminConfig');

var _adminConfig2 = _interopRequireDefault(_adminConfig);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var state = {
    students: []
};

var mutations = {
    add: function add(state, student) {
        state.students.push(student);
    },
    set: function set(state, students) {
        state.students = students;
    }
};

var actions = {
    query: function query(context, classInformationId) {
        return _vue2.default.http.get(_adminConfig2.default.ADMIN_URL + '/class_informations/' + classInformationId + '/students').then(function (response) {
            context.commit('set', response.data);
        });
    },
    store: function store(context, _ref) {
        var studentId = _ref.studentId,
            classInformationId = _ref.classInformationId;

        return _resources.ClassStudent.save({ class_information: classInformationId }, { student_id: studentId }).then(function (response) {
            context.commit('add', response.data);
        });
    }
};

var _module = {
    namespaced: true,
    state: state, mutations: mutations, actions: actions
};

exports.default = _module;
//# sourceMappingURL=class_student.js.map