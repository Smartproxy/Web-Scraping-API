const sdk = require('api')('@smartproxy/v1.0#25e7913l1ow524w');

sdk.auth('SPusername', 'SPpassword');
sdk.realTimeExample({
  target: 'universal',
  parse: false,
  url: 'https://www.facebook.com/groups/1394454774138066'
})
  .then(res => console.log(res))
  .catch(err => console.error(err));