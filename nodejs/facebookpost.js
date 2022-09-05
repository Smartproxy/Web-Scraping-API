const sdk = require('api')('@smartproxy/v1.0#25e7913l1ow524w');

sdk.auth('SPusername', 'SPpassword');
sdk.realTimeExample({
  target: 'universal',
  parse: false,
  headless: 'html',
  url: 'https://www.facebook.com/zuck/posts/pfbid0HeY54v4LMcv2EMxDz5RvnWaR6swsGFWikzUbrsEFtvxu9n4GCx7zA2YTM69XdiYnl'
})
  .then(res => console.log(res))
  .catch(err => console.error(err));