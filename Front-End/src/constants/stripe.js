const STRIPE_PUBLISHABLE = process.env.NODE_ENV === 'production'
  ? 'sk_test_yW4NYdwHpcnDQMUUpaZGo1eZ00IEqGPQYN'
  : 'pk_test_Z5PhsfkuVQsZj2F1uyEgeWXf0060GJZEkn';

export default STRIPE_PUBLISHABLE;
