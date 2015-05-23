module.exports = function(grunt) {
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dev: {
                options: {
                    trace: true,
                    sourcemap: "file",
                    style: "expanded",
                    lineNumbers: true
                },
                files: [{
                    src: ["scss/style.scss"],
                    dest: "../../../public/css/style.css",
                    ext: ".css"
                }]
            },
            dist: {
                options: {
                    style: "compressed"
                },
                files: [{
                    src: ["scss/style.scss"],
                    dest: "../../../public/css/style.css",
                    ext: ".css"
                }]
            }
        },
        uglify: {
            build: {
                files: {
                    "../../../public/js/all.min.js": ["../../../public/js/all.js"]
                }
            }
        },
        concat: {
            options: {
                separator: ';\n'
            },
            dev: {
                src: ['js/*.js'],
                dest: '../../../public/js/all.js'
            }
        },
        watch: {
            css: {
                files: ['**/*.scss'],
                tasks: ["sass:dev"]
            },
            js: {
                files: ["js/*.js"],
                tasks: ["concat", "uglify"]
            }
        }
    });
    grunt.registerTask('default', ["sass:dev", "concat"]);
    grunt.registerTask('livebuild', ["sass:dist", "concat", "uglify"]);
}
