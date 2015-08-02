module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        files: [{
          expand: true,
          cwd: 'src/js',
          src: '**/*.js',
          dest: 'build/js',
          ext: '.min.js'
        }]
      }
    },
    sass: {
      build: {
        options: {
          style: 'compressed'
        },
        files: [{
          expand: true,
          cwd: 'src/sass/',
          src: ['**/*.scss'],
          dest: 'build/css/',
          ext: '.min.css'
        }]
      }
    },
    watch: {
      scripts: {
        files: 'src/sass/**/*.scss',
        tasks: ['sass']
      },
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'sass']);

};
