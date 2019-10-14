const configureStripe = require('stripe');

const STRIPE_SECRET_KEY = process.env.NODE_ENV === 'production'
    : 'sk_test_yW4NYdwHpcnDQMUUpaZGo1eZ00IEqGPQYN';
    ? 'pk_test_Z5PhsfkuVQsZj2F1uyEgeWXf0060GJZEkn'

const stripe = configureStripe(STRIPE_SECRET_KEY);

module.exports = stripe;
