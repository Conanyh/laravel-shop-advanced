<?php

return [
    'alipay' => [
        'app_id'         => '2016101400680926',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAiLj8Er69Sahf9MphqcIhrhI07V3jNbfi/RaQ/qQ2Lw0kU/Mbdr0AkHE6Yhmo63zA1H6r2BYMmHrr4Zn3K4GR9EaRyrY/bs6Ax92zimUGpNV9mCW998M9XsTGK+ozejSNyeF4CXEFmBh2rGYL8TV11MfXTtm0Sm9K6oc6wyFejfqE0aIH0sqbx1mOMRWcXv7yz7XJMKtjZw8GGxSQtFc6CQ13qYL+vihsmLfJYxDCn6ndRHJriIM3a3MMliC5Fj3JVkHi0zn1BDTdmSOfuQn8yudgxBMZjINsJdUggbZ92xEEIMkuh2KMbdapFwZrRlHOqbElVFQ0bnLuX+RK0jALWQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAiLj8Er69Sahf9MphqcIhrhI07V3jNbfi/RaQ/qQ2Lw0kU/Mbdr0AkHE6Yhmo63zA1H6r2BYMmHrr4Zn3K4GR9EaRyrY/bs6Ax92zimUGpNV9mCW998M9XsTGK+ozejSNyeF4CXEFmBh2rGYL8TV11MfXTtm0Sm9K6oc6wyFejfqE0aIH0sqbx1mOMRWcXv7yz7XJMKtjZw8GGxSQtFc6CQ13qYL+vihsmLfJYxDCn6ndRHJriIM3a3MMliC5Fj3JVkHi0zn1BDTdmSOfuQn8yudgxBMZjINsJdUggbZ92xEEIMkuh2KMbdapFwZrRlHOqbElVFQ0bnLuX+RK0jALWQIDAQABAoIBAAqTLEQS5rckw88+PBGSR2KcW+WkJmfIQlFLBon7j4lSHeY0XoJvmfSSHW7rByq3qn6FEauUAQNmNoprizedPPnE34/rSrq6VDGhTzq8F6h2LtGu0aOxQTTsSVuqMLMaD4F24/7u8/zQn5U0C2ZruSJtFpUtt4kuVIARV5UyJosaoOojlH/zYnNo2Wxsa89+cScamRK277BrmFgH+UAo6tGJBEzbXfjBNcZslQ+qIdzBblQ0m6cdJFYnCSxz5s472ON7RHRKrI6pbXbWxIDtK0cmfo75N9vrG1S/JGtf2BDWB2N0Q5ShM8qLwHow5uRzouf/kgeieaLB2+5XEiDwgZECgYEA4ZzQF0yZsMOckpdC0cOQhsALN1+r7apNWvAB12rGPEZVMJ9BXB1iTqyJNDg19DxuPBuPWFWZBNxwFVB2W6lqacWrTZjSkU4NjkMhU6Hasbj/vByonXCSswupQSlcnn2rxHAUOgp3ltkqaWipOa4oRa/k64/5osXFt7h8yp0cnZ0CgYEAmyM4U9Y+iJgzuVO7pjLgk62z9EgVaIm77FYJA1FvtfkRxvh/AVCqt6wgRAwJv1fnykmdvc/wb+etGB/8hTb02cP+ESJojwa06gNsvYkvybcpkHrIU/PKyFyPGkGPleYnK1ApnYbtqksc637STlz/GCuexX+k5VSqP+LLucfBVe0CgYEApZ6mK9Rxpo+SqxIbXT2BJUppcXbsEYZJTw6Na4PYjnrbItxl8KcpebOy7QCuquKJ0doxepkrwaPJK/xrRpKxqYAQZuBfA4gW725cUraognraUU+AgEMZjhJrZ4hjk32R0JyuXIU+kSBOwB6yy8MLkUy0cjC5A0LICDyIb3yyewkCgYA875Kaa5bYdGAstVUJrQZFO39pvj6ady9XX1ve78ffRFvVOZo5XAQSbQunbssNW2vyKwRIoDqi2e9FgJrhgHqgZrmO5WMIeuvo1zuJHy+kHcu3smKphyLpnGGhQIszp9lOzAfslikYMLTFU2Ur3p9cURXmIYMViTHuMhkveeTY6QKBgCu0fH/phIiIkBk5xrPlT+HFSUks/rlI832Nb4khuCYl2snLASE5MqY9HhEQgMTpIwcLCIJ9OXCMVLHt6idSGq7ZTu5zFCpCC8hMNiFwPro9c6oOxNadvFQs+Ri8HGkoaKMR6wwIlDa47jh6XsiTG0uUyE0orlzt+tkpwDZdIxrv',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
