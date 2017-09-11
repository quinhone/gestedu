"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});
var location = window.location;

exports.default = {
    HOST: location.protocol + "//" + location.hostname + ":" + location.port,

    get API_URL() {
        //students,te
        return this.HOST + "/admin/api";
    },
    get ADMIN_URL() {
        //students da turma,
        return this.HOST + "/admin";
    }
};
//# sourceMappingURL=adminConfig.js.map