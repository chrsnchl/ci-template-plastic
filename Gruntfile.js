// Gruntfile.js

// our wrapper function (required by grunt and its plugins)
// all configuration goes inside this function
module.exports = function (grunt) {

// ===========================================================================
// CONFIGURE GRUNT ===========================================================
// ===========================================================================
    grunt.initConfig({
// get the configuration info from package.json ----------------------------
// this way we can use things like name and version (pkg.name)
        pkg: grunt.file.readJSON('package.json'),
        // all of our configuration will go here
        // configure jshint to validate js files -----------------------------------
        jshint: {
            options: {
                reporter: require('jshint-stylish')
                        // use jshint-stylish to make our
                        //errors look and read good
            },
            // when this task is run, lint the
            //Gruntfile and all js files in src
            build: ['Gruntfile.js', 'assets/src/**/*.js']
        },
        // configure uglify to minify js files -------------------------------------
        uglify: {
            options: {
                banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
            },
            files: {
                cwd: 'assets/src/js',
                src: '**/*.js',
                dest: 'assets/dist/js',
                expand: true, // allow dynamic building
                flatten: false, // remove all unnecessary nesting
            }
        },
        // compile less stylesheets to css -----------------------------------------
        less: {
            build: {
                files: [
                    {
                        expand: true,
                        cwd: 'assets/src/css',
                        // Compile each LESS component excluding "bootstrap.less", 
                        // "mixins.less" and "variables.less" 
                        //src: ['*.less', '!{boot,var,mix}*.less'],
                        src: ['**/*.less'],
                        dest: 'assets/dist/css/',
                        ext: '.css'
                    }
                ]
            }


        },
        // configure cssmin to minify css files ------------------------------------
        cssmin: {
            options: {
                banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
            },
            build: {
                files: [
                    {
                        expand: true,
                        cwd: 'assets/src/css',
                        src: ['*.css'],
                        dest: 'assets/dist/css/',
                        ext: '.css'
                    }
                ]
            }
        },
// configure watch to auto update ----------------
        watch: {
// for stylesheets, watch css and less files 
// only run less and cssmin 
            stylesheets: {
                files: ['assets/src/**/*.css', 'assets/src/**/*.less'],
                tasks: ['less']
            },
            // for scripts, run jshint and uglify 
            scripts: {
                files: 'assets/src/**/*.js', tasks: ['jshint', 'uglify']
            }
        }


    });
    // ===========================================================================
    // LOAD GRUNT PLUGINS ========================================================
    // ===========================================================================
    // we can only load these if they are in our package.json
    // make sure you have run npm install so our app can find these
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    // ============= // CREATE TASKS ========== //
    grunt.registerTask('default', ['jshint', 'uglify', 'less']);
};
