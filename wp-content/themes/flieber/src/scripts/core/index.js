/* global jQuery: true */

export default function setup(callback) {
  return $(document).ready(function() {
    callback();
    //callback;
  });
}
