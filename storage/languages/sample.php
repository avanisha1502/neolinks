<?php 

return [
    /**
     * Language Information
     */
    "code" => "en",
    "region" => "en_US",
    "name" => "Sample",
    "author" => "GemPixel",
    "link" => "https://gempixel.com",
    "date" => "01/11/2023",
    "rtl" => false,
    /**
     * Language Data
     */
    "data" => [  
                
        #: app/controllers/BlogController.php:83
        #: storage/themes/default/blog/categories.php:6
        #: storage/themes/default/blog/index.php:6
        #: storage/themes/default/blog/search.php:6
        #: storage/themes/default/partials/main_menu.php:107
        #: storage/themes/the23/blog/categories.php:4
        #: storage/themes/the23/blog/index.php:5 storage/themes/the23/blog/search.php:5
        #: storage/themes/the23/blog/single.php:10
        #: storage/themes/the23/partials/main_menu.php:95
        "Blog" => "",

        #: app/controllers/BlogController.php:84 app/controllers/BlogController.php:208
        "Check out blog for tips & tricks" => "",

        #: app/controllers/BlogController.php:140
        #: app/controllers/BlogController.php:207
        "{c} Posts" => "",

        #: app/controllers/HelpController.php:62
        #: storage/themes/default/help/category.php:7
        #: storage/themes/default/help/search.php:7
        #: storage/themes/default/help/single.php:7
        #: storage/themes/default/help/top.php:5
        #: storage/themes/default/partials/footer.php:73
        #: storage/themes/default/partials/main_menu.php:42
        #: storage/themes/default/partials/topbar_menu.php:120
        #: storage/themes/the23/help/category.php:7
        #: storage/themes/the23/help/search.php:7
        #: storage/themes/the23/help/single.php:9
        #: storage/themes/the23/partials/footer.php:72
        #: storage/themes/the23/partials/main_menu.php:121
        "Help Center" => "",

        #: app/controllers/HelpController.php:63 app/controllers/HelpController.php:85
        #: app/controllers/HelpController.php:120
        #: storage/themes/default/partials/main_menu.php:43
        "Check out our help center" => "",

        #: app/controllers/HelpController.php:83 app/controllers/HelpController.php:118
        #: app/controllers/HelpController.php:145
        "{t} - Help Center" => "",

        #: app/controllers/LinkController.php:57 app/controllers/LinkController.php:523
        #: app/controllers/LinkController.php:549
        #: app/controllers/LinkController.php:575
        #: app/controllers/LinkController.php:605
        #: app/controllers/LinkController.php:633
        #: app/controllers/LinkController.php:663
        #: app/controllers/LinkController.php:692
        #: app/controllers/LinkController.php:767
        #: app/controllers/user/AccountController.php:44
        #: app/controllers/user/BioController.php:146
        #: app/controllers/user/BioController.php:274
        #: app/controllers/user/BioController.php:305
        #: app/controllers/user/BioController.php:483
        #: app/controllers/user/BioController.php:860
        #: app/controllers/user/BioController.php:888
        #: app/controllers/user/BioController.php:958
        #: app/controllers/user/BioController.php:1104
        #: app/controllers/user/CampaignsController.php:79
        #: app/controllers/user/CampaignsController.php:158
        #: app/controllers/user/CampaignsController.php:205
        #: app/controllers/user/ChannelsController.php:180
        #: app/controllers/user/ChannelsController.php:218
        #: app/controllers/user/ChannelsController.php:250
        #: app/controllers/user/ChannelsController.php:335
        #: app/controllers/user/DomainsController.php:90
        #: app/controllers/user/DomainsController.php:130
        #: app/controllers/user/DomainsController.php:195
        #: app/controllers/user/DomainsController.php:238
        #: app/controllers/user/DomainsController.php:271
        #: app/controllers/user/ExportController.php:50
        #: app/controllers/user/ExportController.php:85
        #: app/controllers/user/ExportController.php:118
        #: app/controllers/user/ExportController.php:156
        #: app/controllers/user/ExportController.php:205
        #: app/controllers/user/ImportController.php:51
        #: app/controllers/user/ImportController.php:73
        #: app/controllers/user/OverlayController.php:90
        #: app/controllers/user/OverlayController.php:121
        #: app/controllers/user/OverlayController.php:148
        #: app/controllers/user/OverlayController.php:176
        #: app/controllers/user/OverlayController.php:1637
        #: app/controllers/user/PixelsController.php:95
        #: app/controllers/user/PixelsController.php:127
        #: app/controllers/user/PixelsController.php:181
        #: app/controllers/user/PixelsController.php:205
        #: app/controllers/user/PixelsController.php:246
        #: app/controllers/user/QRController.php:112
        #: app/controllers/user/QRController.php:351
        #: app/controllers/user/QRController.php:517
        #: app/controllers/user/QRController.php:634
        #: app/controllers/user/QRController.php:814
        #: app/controllers/user/QRController.php:851
        #: app/controllers/user/QRController.php:911
        #: app/controllers/user/QRController.php:1020
        #: app/controllers/user/QRController.php:1201
        #: app/controllers/user/SplashController.php:85
        #: app/controllers/user/SplashController.php:119
        #: app/controllers/user/SplashController.php:208
        #: app/controllers/user/SplashController.php:242
        #: app/controllers/user/SplashController.php:331
        #: app/controllers/user/TeamsController.php:109
        "You do not have this permission. Please contact your team administrator." => "",

        #: app/controllers/LinkController.php:67
        "Please enter valid links." => "",

        #: app/controllers/LinkController.php:80
        "Links have been shortened." => "",

        #: app/controllers/LinkController.php:149
        "The password is invalid or does not match." => "",

        #: app/controllers/LinkController.php:527
        #: app/controllers/LinkController.php:1075
        #: app/controllers/UsersController.php:1153
        #: app/controllers/UsersController.php:1155
        #: app/controllers/UsersController.php:1157
        #: app/controllers/UsersController.php:1176
        #: app/controllers/UsersController.php:1198
        #: app/controllers/user/AccountController.php:514
        #: app/controllers/user/AccountController.php:522
        #: app/controllers/user/AccountController.php:547
        #: app/controllers/user/AccountController.php:623
        #: app/controllers/user/BioController.php:278
        #: app/controllers/user/CampaignsController.php:209
        #: app/controllers/user/ChannelsController.php:256
        #: app/controllers/user/DomainsController.php:276
        #: app/controllers/user/ImportController.php:157
        #: app/controllers/user/OverlayController.php:134
        #: app/controllers/user/OverlayController.php:161
        #: app/controllers/user/OverlayController.php:191
        #: app/controllers/user/OverlayController.php:1641
        #: app/controllers/user/PixelsController.php:250
        #: app/controllers/user/QRController.php:820
        #: app/controllers/user/TeamsController.php:221
        #: app/helpers/payments/Paddle.php:448 app/helpers/payments/Paddle.php:558
        #: app/helpers/payments/Paddle.php:560 app/helpers/payments/Stripe.php:1216
        #: app/helpers/payments/Stripe.php:1227
        "An unexpected error occurred. Please try again." => "",

        #: app/controllers/LinkController.php:533
        "Link not found. Please try again." => "",

        #: app/controllers/LinkController.php:536
        "Link has been deleted." => "",

        #: app/controllers/LinkController.php:554
        "No link was selected. Please try again." => "",

        #: app/controllers/LinkController.php:563
        "Selected Links have been deleted." => "",

        #: app/controllers/LinkController.php:584
        #: app/controllers/LinkController.php:614
        #: app/controllers/LinkController.php:642
        #: app/controllers/LinkController.php:672
        #: app/controllers/LinkController.php:832
        #: app/controllers/user/ChannelsController.php:292
        #: app/controllers/user/ExportController.php:211
        #: app/controllers/user/PixelsController.php:297
        "You need to select at least 1 link." => "",

        #: app/controllers/LinkController.php:592
        "Selected links have been archived." => "",

        #: app/controllers/LinkController.php:621
        "Selected links have been removed from archive." => "",

        #: app/controllers/LinkController.php:650
        "Selected links have been set to public." => "",

        #: app/controllers/LinkController.php:679
        "Selected links have been set to private." => "",

        #: app/controllers/LinkController.php:695
        #: app/controllers/LinkController.php:1080
        #: app/controllers/user/ExportController.php:89
        "Link does not exist." => "",

        #: app/controllers/LinkController.php:697
        #: storage/themes/default/user/edit.php:4
        #: storage/themes/default/user/edit.php:7
        #: storage/themes/default/user/edit.php:382
        "Update Link" => "",

        #: app/controllers/LinkController.php:770
        "URL does not exist." => "",

        #: app/controllers/LinkController.php:809
        "Link has been updated successfully." => "",

        #: app/controllers/LinkController.php:821
        "Invalid campaign. Please choose a valid campaign." => "",

        #: app/controllers/LinkController.php:839
        "Selected links have been added to the {c} campaign." => "",

        #: app/controllers/LinkController.php:839
        "Selected links have been removed from campaigns." => "",

        #: app/controllers/LinkController.php:922
        "This has been disabled in demo." => "",

        #: app/controllers/LinkController.php:924
        "You need to be logged in to use this feature." => "",

        #: app/controllers/LinkController.php:1045
        "You have to make your profile public or set a default bio for this page to be accessible." => "",

        #: app/controllers/LinkController.php:1089
        "Statistics have been successfully reset." => "",

        #: app/controllers/PageController.php:75
        #: storage/themes/default/pages/contact.php:6
        #: storage/themes/default/partials/footer.php:82
        #: storage/themes/the23/errors/404.php:47
        #: storage/themes/the23/pages/contact.php:5
        #: storage/themes/the23/partials/footer.php:81
        "Contact Us" => "",

        #: app/controllers/PageController.php:77
        #: storage/themes/the23/pages/contact.php:6
        "If you have any questions, feel free to contact us so we can help you." => "",

        #: app/controllers/PageController.php:116
        #: app/controllers/PageController.php:206
        #: app/controllers/ServerController.php:99
        #: app/controllers/UsersController.php:329
        #: app/controllers/UsersController.php:445
        #: app/controllers/UsersController.php:1194
        #: app/controllers/user/AccountController.php:380
        #: app/controllers/user/DashboardController.php:391
        #: app/controllers/user/OverlayController.php:314
        #: app/controllers/user/OverlayController.php:474
        #: app/controllers/user/TeamsController.php:117 app/helpers/BioWidgets.php:1486
        #: app/helpers/BioWidgets.php:2753 app/helpers/BioWidgets.php:2877
        #: storage/themes/default/auth/register.php:64
        #: storage/themes/default/pages/contact.php:26
        #: storage/themes/default/pages/report.php:22
        "Please enter a valid email." => "",

        #: app/controllers/PageController.php:124
        "Please enter your name." => "",

        #: app/controllers/PageController.php:132
        "Please enter a message or message too short." => "",

        #: app/controllers/PageController.php:162
        "Your message has been sent. We will reply you as soon as possible." => "",

        #: app/controllers/PageController.php:178
        "Report Link" => "",

        #: app/controllers/PageController.php:180
        #: storage/themes/default/pages/report.php:7
        #: storage/themes/the23/pages/report.php:6
        "Please report a link that you consider risky or dangerous. We will review all cases and take measure to remove the link." => "",

        #: app/controllers/PageController.php:214
        #: storage/themes/default/pages/report.php:26
        #: storage/themes/the23/pages/report.php:18
        "Please enter a valid link." => "",

        #: app/controllers/PageController.php:254
        "Thank you. We will review this link and take action." => "",

        #: app/controllers/PageController.php:280
        #: storage/themes/default/pages/api.php:49
        #: storage/themes/the23/pages/api.php:40
        "API Reference for Developers" => "",

        #: app/controllers/PageController.php:282
        "API Reference for Developers." => "",

        #: app/controllers/PageController.php:347
        #: storage/themes/default/partials/footer.php:79
        #: storage/themes/the23/partials/footer.php:78
        "Affiliate Program" => "",

        #: app/controllers/PageController.php:349
        "Refer customers to us and we will reward you a commission on all qualifying sales made on our website. Anyone can join the affiliate program." => "",

        #: app/controllers/PageController.php:365
        #: app/controllers/user/QRController.php:97 app/helpers/App.php:386
        #: storage/themes/default/index.php:306 storage/themes/default/pages/qr.php:300
        #: storage/themes/default/partials/footer.php:59
        #: storage/themes/default/partials/main_menu.php:60
        #: storage/themes/default/partials/sidebar_menu.php:60
        #: storage/themes/default/qr/index.php:3 storage/themes/default/qr/index.php:17
        #: storage/themes/default/qr/index.php:25
        #: storage/themes/default/teams/edit.php:19
        #: storage/themes/default/teams/index.php:25
        #: storage/themes/default/user/channel.php:20
        #: storage/themes/default/user/confirmation.php:78
        #: storage/themes/the23/index.php:6 storage/themes/the23/index.php:113
        #: storage/themes/the23/index.php:177 storage/themes/the23/pages/qr.php:301
        #: storage/themes/the23/partials/footer.php:51
        #: storage/themes/the23/partials/main_menu.php:47
        "QR Codes" => "",

        #: app/controllers/PageController.php:367 app/helpers/App.php:387
        #: storage/themes/default/index.php:308 storage/themes/default/pages/qr.php:303
        #: storage/themes/the23/pages/qr.php:304
        "Easy to use, dynamic and customizable QR codes for your marketing campaigns. Analyze statistics and optimize your marketing strategy and increase engagement." => "",

        #: app/controllers/PageController.php:371
        "Free QR Code Generator" => "",

        #: app/controllers/PageController.php:502
        #: app/controllers/user/BioController.php:129 app/helpers/App.php:380
        #: storage/themes/default/bio/index.php:3
        #: storage/themes/default/bio/index.php:14
        #: storage/themes/default/bio/index.php:22
        #: storage/themes/default/pages/bio.php:6
        #: storage/themes/default/partials/main_menu.php:68
        #: storage/themes/default/partials/sidebar_menu.php:53
        #: storage/themes/default/teams/edit.php:26
        #: storage/themes/default/teams/index.php:32
        #: storage/themes/default/user/channel.php:18 storage/themes/the23/index.php:6
        #: storage/themes/the23/index.php:122 storage/themes/the23/pages/bio.php:7
        #: storage/themes/the23/partials/footer.php:52
        #: storage/themes/the23/partials/main_menu.php:36
        "Bio Pages" => "",

        #: app/controllers/PageController.php:504 app/helpers/App.php:381
        #: storage/themes/default/pages/bio.php:9 storage/themes/the23/pages/bio.php:10
        "Convert your followers by creating beautiful pages that group all of your important links on the single page." => "",

        #: app/controllers/PageController.php:526
        #: storage/themes/default/pages/consent.php:6
        #: storage/themes/the23/pages/consent.php:5
        "Cookie Policy Consent" => "",

        #: app/controllers/QRController.php:251 app/controllers/QRController.php:253
        "Invalid request. Please try again" => "",

        #: app/controllers/QRController.php:278
        "QR code successfully generated" => "",

        #: app/controllers/ServerController.php:174
        #: app/controllers/user/OverlayController.php:895
        #: app/controllers/user/OverlayController.php:1063
        #: app/controllers/user/OverlayController.php:1185
        #: app/controllers/user/OverlayController.php:1321
        #: app/controllers/user/SplashController.php:130
        #: app/controllers/user/SplashController.php:251 app/helpers/QR.php:598
        #: app/helpers/QR.php:600 app/traits/Links.php:101 app/traits/Links.php:536
        #: storage/themes/default/layouts/api.php:63
        #: storage/themes/default/layouts/auth.php:30
        #: storage/themes/default/layouts/dashboard.php:125
        #: storage/themes/default/layouts/main.php:71
        #: storage/themes/default/layouts/stats.php:70
        #: storage/themes/the23/partials/languagejs.php:3
        "Please enter a valid URL." => "",

        #: app/controllers/ServerController.php:180
        "Deep linking automatically generated" => "",

        #: app/controllers/StatsController.php:63
        #: app/controllers/StatsController.php:68
        #: app/controllers/StatsController.php:243
        #: app/controllers/StatsController.php:248
        #: app/controllers/StatsController.php:494
        #: app/controllers/StatsController.php:499
        #: app/controllers/StatsController.php:653
        #: app/controllers/StatsController.php:658
        #: app/controllers/StatsController.php:808
        #: app/controllers/StatsController.php:813
        #: app/controllers/StatsController.php:964
        #: app/controllers/StatsController.php:969
        #: app/controllers/StatsController.php:1042
        #: app/controllers/StatsController.php:1047
        #: app/controllers/StatsController.php:1116
        #: app/controllers/StatsController.php:1121
        "This link is private and only the creator can access the stats. If you are the creator, please login to access it." => "",

        #: app/controllers/StatsController.php:91
        #: app/controllers/StatsController.php:269
        #: app/controllers/StatsController.php:520
        #: app/controllers/StatsController.php:679
        #: app/controllers/StatsController.php:834
        #: app/controllers/StatsController.php:990
        #: app/controllers/StatsController.php:1068
        #: app/controllers/StatsController.php:1141 app/helpers/App.php:1023
        #: storage/themes/default/user/settings.php:86
        "Direct" => "",

        #: app/controllers/StatsController.php:95
        #: app/controllers/StatsController.php:100
        #: app/controllers/StatsController.php:105
        #: app/controllers/StatsController.php:276
        #: app/controllers/StatsController.php:527
        #: app/controllers/StatsController.php:686
        #: app/controllers/StatsController.php:841
        #: app/controllers/StatsController.php:1012
        #: app/controllers/StatsController.php:1088
        "Stats for" => "",

        #: app/controllers/StatsController.php:106
        #: app/controllers/StatsController.php:1156
        "Advanced statistics page for the short URL" => "",

        #: app/controllers/StatsController.php:118
        #: app/controllers/StatsController.php:294
        #: app/controllers/StatsController.php:543
        #: app/controllers/StatsController.php:699
        #: app/controllers/StatsController.php:854
        #: app/controllers/StatsController.php:1165
        #: app/controllers/user/CampaignsController.php:238
        #: app/controllers/user/StatsController.php:47
        #: app/controllers/user/StatsController.php:194
        #: storage/themes/default/pricing/checkout.php:130
        #: storage/themes/the23/pricing/checkout.php:152
        "Apply" => "",

        #: app/controllers/StatsController.php:119
        #: app/controllers/StatsController.php:295
        #: app/controllers/StatsController.php:544
        #: app/controllers/StatsController.php:700
        #: app/controllers/StatsController.php:855
        #: app/controllers/StatsController.php:1166
        #: app/controllers/user/CampaignsController.php:239
        #: app/controllers/user/StatsController.php:48
        #: app/controllers/user/StatsController.php:195
        #: storage/themes/default/bio/index.php:163
        #: storage/themes/default/bio/index.php:183
        #: storage/themes/default/bio/index.php:200
        #: storage/themes/default/bio/index.php:228
        #: storage/themes/default/bio/widgets.php:55
        #: storage/themes/default/domains/index.php:106
        #: storage/themes/default/layouts/dashboard.php:139
        #: storage/themes/default/overlay/create.php:60
        #: storage/themes/default/overlay/index.php:87
        #: storage/themes/default/pixels/index.php:99
        #: storage/themes/default/qr/index.php:148
        #: storage/themes/default/qr/index.php:166
        #: storage/themes/default/qr/index.php:193
        #: storage/themes/default/qr/index.php:211
        #: storage/themes/default/splash/index.php:85
        #: storage/themes/default/teams/index.php:145
        #: storage/themes/default/user/campaigns.php:134
        #: storage/themes/default/user/campaigns.php:174
        #: storage/themes/default/user/campaigns.php:194
        #: storage/themes/default/user/campaignstats.php:111
        #: storage/themes/default/user/channel.php:72
        #: storage/themes/default/user/channel.php:112
        #: storage/themes/default/user/channels.php:112
        #: storage/themes/default/user/channels.php:154
        #: storage/themes/default/user/channels.php:174
        #: storage/themes/default/user/import.php:80
        #: storage/themes/default/user/index.php:230
        #: storage/themes/default/user/index.php:247
        #: storage/themes/default/user/index.php:264
        #: storage/themes/default/user/index.php:293
        #: storage/themes/default/user/index.php:321
        #: storage/themes/default/user/index.php:353
        #: storage/themes/default/user/links.php:135
        #: storage/themes/default/user/links.php:152
        #: storage/themes/default/user/links.php:169
        #: storage/themes/default/user/links.php:242
        #: storage/themes/default/user/links.php:270
        #: storage/themes/default/user/links.php:302
        #: storage/themes/default/user/security.php:125
        #: storage/themes/default/user/security.php:151
        #: storage/themes/default/user/settings.php:265
        #: storage/themes/default/user/settings.php:286
        #: storage/themes/default/user/settings.php:319
        #: storage/themes/default/user/stats.php:70
        "Cancel" => "",

        #: app/controllers/StatsController.php:120
        #: app/controllers/StatsController.php:296
        #: app/controllers/StatsController.php:545
        #: app/controllers/StatsController.php:701
        #: app/controllers/StatsController.php:856
        #: app/controllers/StatsController.php:1167
        #: app/controllers/user/CampaignsController.php:240
        #: app/controllers/user/StatsController.php:49
        #: app/controllers/user/StatsController.php:196
        "From" => "",

        #: app/controllers/StatsController.php:121
        #: app/controllers/StatsController.php:297
        #: app/controllers/StatsController.php:546
        #: app/controllers/StatsController.php:702
        #: app/controllers/StatsController.php:857
        #: app/controllers/StatsController.php:1168
        #: app/controllers/user/CampaignsController.php:241
        #: app/controllers/user/StatsController.php:50
        #: app/controllers/user/StatsController.php:197
        "To" => "",

        #: app/controllers/StatsController.php:122
        #: app/controllers/StatsController.php:298
        #: app/controllers/StatsController.php:547
        #: app/controllers/StatsController.php:703
        #: app/controllers/StatsController.php:858
        #: app/controllers/StatsController.php:1169
        #: app/controllers/user/CampaignsController.php:242
        #: app/controllers/user/StatsController.php:51
        #: app/controllers/user/StatsController.php:198
        #: storage/themes/default/index.php:26
        #: storage/themes/default/partials/shortener.php:65
        #: storage/themes/default/partials/shortenermodal.php:62
        #: storage/themes/default/user/edit.php:449 storage/themes/the23/index.php:27
        "Custom" => "",

        #: app/controllers/StatsController.php:123
        #: app/controllers/StatsController.php:299
        #: app/controllers/StatsController.php:548
        #: app/controllers/StatsController.php:704
        #: app/controllers/StatsController.php:859
        #: app/controllers/StatsController.php:1170
        #: app/controllers/user/CampaignsController.php:243
        #: app/controllers/user/StatsController.php:52
        #: app/controllers/user/StatsController.php:199
        "Su" => "",

        #: app/controllers/StatsController.php:123
        #: app/controllers/StatsController.php:299
        #: app/controllers/StatsController.php:548
        #: app/controllers/StatsController.php:704
        #: app/controllers/StatsController.php:859
        #: app/controllers/StatsController.php:1170
        #: app/controllers/user/CampaignsController.php:243
        #: app/controllers/user/StatsController.php:52
        #: app/controllers/user/StatsController.php:199
        "Mo" => "",

        #: app/controllers/StatsController.php:123
        #: app/controllers/StatsController.php:299
        #: app/controllers/StatsController.php:548
        #: app/controllers/StatsController.php:704
        #: app/controllers/StatsController.php:859
        #: app/controllers/StatsController.php:1170
        #: app/controllers/user/CampaignsController.php:243
        #: app/controllers/user/StatsController.php:52
        #: app/controllers/user/StatsController.php:199
        "Tu" => "",

        #: app/controllers/StatsController.php:123
        #: app/controllers/StatsController.php:299
        #: app/controllers/StatsController.php:548
        #: app/controllers/StatsController.php:704
        #: app/controllers/StatsController.php:859
        #: app/controllers/StatsController.php:1170
        #: app/controllers/user/CampaignsController.php:243
        #: app/controllers/user/StatsController.php:52
        #: app/controllers/user/StatsController.php:199
        "We" => "",

        #: app/controllers/StatsController.php:123
        #: app/controllers/StatsController.php:299
        #: app/controllers/StatsController.php:548
        #: app/controllers/StatsController.php:704
        #: app/controllers/StatsController.php:859
        #: app/controllers/StatsController.php:1170
        #: app/controllers/user/CampaignsController.php:243
        #: app/controllers/user/StatsController.php:52
        #: app/controllers/user/StatsController.php:199
        "Th" => "",

        #: app/controllers/StatsController.php:123
        #: app/controllers/StatsController.php:299
        #: app/controllers/StatsController.php:548
        #: app/controllers/StatsController.php:704
        #: app/controllers/StatsController.php:859
        #: app/controllers/StatsController.php:1170
        #: app/controllers/user/CampaignsController.php:243
        #: app/controllers/user/StatsController.php:52
        #: app/controllers/user/StatsController.php:199
        "Fr" => "",

        #: app/controllers/StatsController.php:123
        #: app/controllers/StatsController.php:299
        #: app/controllers/StatsController.php:548
        #: app/controllers/StatsController.php:704
        #: app/controllers/StatsController.php:859
        #: app/controllers/StatsController.php:1170
        #: app/controllers/user/CampaignsController.php:243
        #: app/controllers/user/StatsController.php:52
        #: app/controllers/user/StatsController.php:199
        "Sa" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "January" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "February" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "March" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "April" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "May" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "June" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "July" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "August" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "September" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "October" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "November" => "",

        #: app/controllers/StatsController.php:124
        #: app/controllers/StatsController.php:300
        #: app/controllers/StatsController.php:549
        #: app/controllers/StatsController.php:705
        #: app/controllers/StatsController.php:860
        #: app/controllers/StatsController.php:1171
        #: app/controllers/user/CampaignsController.php:244
        #: app/controllers/user/StatsController.php:53
        #: app/controllers/user/StatsController.php:200
        "December" => "",

        #: app/controllers/StatsController.php:132
        #: app/controllers/StatsController.php:308
        #: app/controllers/StatsController.php:557
        #: app/controllers/StatsController.php:713
        #: app/controllers/StatsController.php:868
        #: app/controllers/StatsController.php:1179
        #: app/controllers/user/CampaignsController.php:251
        #: app/controllers/user/StatsController.php:60
        #: app/controllers/user/StatsController.php:207
        "Last 7 Days" => "",

        #: app/controllers/StatsController.php:133
        #: app/controllers/StatsController.php:309
        #: app/controllers/StatsController.php:558
        #: app/controllers/StatsController.php:714
        #: app/controllers/StatsController.php:869
        #: app/controllers/StatsController.php:1180
        #: app/controllers/user/CampaignsController.php:252
        #: app/controllers/user/StatsController.php:61
        #: app/controllers/user/StatsController.php:208
        "Last 30 Days" => "",

        #: app/controllers/StatsController.php:134
        #: app/controllers/StatsController.php:310
        #: app/controllers/StatsController.php:559
        #: app/controllers/StatsController.php:715
        #: app/controllers/StatsController.php:870
        #: app/controllers/StatsController.php:1181
        #: app/controllers/user/CampaignsController.php:253
        #: app/controllers/user/StatsController.php:62
        #: app/controllers/user/StatsController.php:209
        "This Month" => "",

        #: app/controllers/StatsController.php:135
        #: app/controllers/StatsController.php:311
        #: app/controllers/StatsController.php:560
        #: app/controllers/StatsController.php:716
        #: app/controllers/StatsController.php:871
        #: app/controllers/StatsController.php:1182
        #: app/controllers/user/CampaignsController.php:254
        #: app/controllers/user/StatsController.php:63
        #: app/controllers/user/StatsController.php:210
        "Last Month" => "",

        #: app/controllers/StatsController.php:136
        #: app/controllers/StatsController.php:312
        #: app/controllers/StatsController.php:561
        #: app/controllers/StatsController.php:717
        #: app/controllers/StatsController.php:872
        #: app/controllers/StatsController.php:1183
        #: app/controllers/user/CampaignsController.php:255
        #: app/controllers/user/StatsController.php:64
        #: app/controllers/user/StatsController.php:211
        "Last 3 Months" => "",

        #: app/controllers/StatsController.php:167
        #: app/controllers/StatsController.php:472
        #: app/controllers/user/CampaignsController.php:295
        #: app/controllers/user/DashboardController.php:244
        #: app/controllers/user/StatsController.php:116 app/helpers/BioWidgets.php:754
        #: storage/themes/default/index.php:645
        #: storage/themes/default/partials/links.php:101
        #: storage/themes/default/stats/index.php:10
        #: storage/themes/default/stats/partial.php:37
        #: storage/themes/default/user/campaignstats.php:37
        #: storage/themes/default/user/index.php:18
        #: storage/themes/default/user/stats.php:24 storage/themes/the23/index.php:92
        #: storage/themes/the23/index.php:100 storage/themes/the23/index.php:102
        #: storage/themes/the23/index.php:678
        "Clicks" => "",

        #: app/controllers/StatsController.php:272
        #: app/controllers/StatsController.php:279
        "Country Stats for" => "",

        #: app/controllers/StatsController.php:282
        #: app/controllers/StatsController.php:1018
        #: app/controllers/StatsController.php:1094
        "Country statistics page for the short URL" => "",

        #: app/controllers/StatsController.php:387
        #: app/controllers/StatsController.php:409
        #: app/controllers/StatsController.php:410
        #: app/controllers/StatsController.php:939
        #: app/controllers/user/CampaignsController.php:343
        #: app/controllers/user/StatsController.php:167
        #: storage/themes/default/stats/partial.php:52
        #: storage/themes/default/stats/partial.php:60
        "Unknown" => "",

        #: app/controllers/StatsController.php:469
        #: storage/themes/default/stats/activity.php:61
        #: storage/themes/default/stats/index.php:36
        #: storage/themes/default/user/activity.php:72
        #: storage/themes/default/user/index.php:177
        #: storage/themes/default/user/security.php:28
        "Somewhere from" => "",

        #: app/controllers/StatsController.php:523
        #: app/controllers/StatsController.php:530
        "Platform Stats for" => "",

        #: app/controllers/StatsController.php:532
        "Platform statistics page for the short URL" => "",

        #: app/controllers/StatsController.php:682
        #: app/controllers/StatsController.php:689
        "Browser Stats for" => "",

        #: app/controllers/StatsController.php:691
        "Browser statistics page for the short URL" => "",

        #: app/controllers/StatsController.php:837
        #: app/controllers/StatsController.php:844
        "Language Stats for" => "",

        #: app/controllers/StatsController.php:846
        "Language statistics page for the short URL" => "",

        #: app/controllers/StatsController.php:1008
        #: app/controllers/StatsController.php:1015
        "Referrers Stats for" => "",

        #: app/controllers/StatsController.php:1084
        #: app/controllers/StatsController.php:1091
        "A/B Testing Stats for" => "",

        #: app/controllers/StatsController.php:1145
        #: app/controllers/StatsController.php:1150
        #: app/controllers/StatsController.php:1155
        "Click Activity for" => "",

        #: app/controllers/SubscriptionController.php:83
        #: app/controllers/SubscriptionController.php:145
        "Current" => "",

        #: app/controllers/SubscriptionController.php:86
        #: app/controllers/SubscriptionController.php:90
        "{d}-Day Free Trial" => "",

        #: app/controllers/SubscriptionController.php:86
        #: app/controllers/SubscriptionController.php:148
        #: storage/themes/default/integrations/index.php:14
        #: storage/themes/default/integrations/index.php:38
        #: storage/themes/default/partials/topbar_menu.php:20
        #: storage/themes/default/qr/bulk.php:183
        #: storage/themes/default/qr/bulk.php:360
        #: storage/themes/default/qr/edit.php:569
        #: storage/themes/default/qr/edit.php:743 storage/themes/default/qr/new.php:562
        #: storage/themes/default/qr/new.php:739
        "Upgrade" => "",

        #: app/controllers/SubscriptionController.php:90
        #: app/controllers/SubscriptionController.php:152
        #: storage/themes/default/index.php:83 storage/themes/default/index.php:311
        #: storage/themes/default/index.php:391 storage/themes/default/index.php:586
        #: storage/themes/default/pages/bio.php:12
        #: storage/themes/default/pages/bio.php:46
        #: storage/themes/default/pages/bio.php:64
        #: storage/themes/default/pages/qr.php:306
        #: storage/themes/default/pages/qr.php:417
        #: storage/themes/default/pages/qr.php:435
        #: storage/themes/default/partials/footer.php:15
        #: storage/themes/default/partials/main_menu.php:177
        #: storage/themes/default/partials/main_menu.php:193
        #: storage/themes/the23/index.php:61 storage/themes/the23/index.php:70
        #: storage/themes/the23/index.php:196 storage/themes/the23/index.php:257
        #: storage/themes/the23/index.php:443 storage/themes/the23/index.php:494
        #: storage/themes/the23/index.php:545 storage/themes/the23/index.php:697
        #: storage/themes/the23/index.php:717 storage/themes/the23/index.php:741
        #: storage/themes/the23/pages/bio.php:16 storage/themes/the23/pages/bio.php:90
        #: storage/themes/the23/pages/bio.php:148
        #: storage/themes/the23/pages/bio.php:162
        #: storage/themes/the23/pages/bio.php:185 storage/themes/the23/pages/qr.php:307
        #: storage/themes/the23/pages/qr.php:417 storage/themes/the23/pages/qr.php:469
        #: storage/themes/the23/pages/qr.php:482
        #: storage/themes/the23/partials/main_menu.php:222
        "Get Started" => "",

        #: app/controllers/SubscriptionController.php:101
        #: storage/themes/the23/pricing/list.php:15
        #: storage/themes/the23/pricing/table.php:23
        "lifetime" => "",

        #: app/controllers/SubscriptionController.php:108
        #: storage/themes/the23/pricing/list.php:15
        #: storage/themes/the23/pricing/table.php:23
        "year" => "",

        #: app/controllers/SubscriptionController.php:114
        #: storage/themes/default/pricing/table_list.php:37
        #: storage/themes/default/pricing/table_list.php:45
        #: storage/themes/the23/pricing/list.php:15
        #: storage/themes/the23/pricing/table.php:23
        #: storage/themes/the23/pricing/table.php:37
        #: storage/themes/the23/pricing/table.php:45
        "month" => "",

        #: app/controllers/SubscriptionController.php:148
        #: app/controllers/SubscriptionController.php:152
        "Try {d} days for free" => "",

        #: app/controllers/SubscriptionController.php:166
        "Premium Plan Pricing" => "",

        #: app/controllers/SubscriptionController.php:167
        "Transparent pricing without any hidden fees so you always know what you will pa" => "",

        #: app/controllers/SubscriptionController.php:202
        "Please contact us so we can upgrade your plan since you are on a lifetime plan." => "",

        #: app/controllers/SubscriptionController.php:223
        #: app/helpers/BioWidgets.php:2763 app/helpers/payments/Stripe.php:560
        "You have been successfully subscribed." => "",

        #: app/controllers/SubscriptionController.php:229
        "You have already used a trial." => "",

        #: app/controllers/SubscriptionController.php:321
        "Please fill your billing information." => "",

        #: app/controllers/SubscriptionController.php:380
        #: app/controllers/SubscriptionController.php:382
        "Promo code has expired. Please try again." => "",

        #: app/controllers/SubscriptionController.php:385
        #: app/controllers/SubscriptionController.php:409
        #: app/controllers/SubscriptionController.php:424
        "Please enter a valid promo code." => "",

        #: app/controllers/SubscriptionController.php:390
        "Promo code is not valid for this plan." => "",

        #: app/controllers/SubscriptionController.php:462
        #: app/controllers/SubscriptionController.php:464
        #: app/controllers/SubscriptionController.php:466
        #: app/controllers/SubscriptionController.php:468
        "Voucher is invalid or has expired." => "",

        #: app/controllers/SubscriptionController.php:470
        "You have already redeemed this voucher once." => "",

        #: app/controllers/SubscriptionController.php:505
        "You have successfully redeemed a voucher." => "",

        #: app/controllers/UsersController.php:51
        #: storage/themes/default/gates/domain.php:14
        #: storage/themes/the23/gates/domain.php:14
        "Login to your account" => "",

        #: app/controllers/UsersController.php:76
        "You have been blocked for 1 hour due to many unsuccessful login attempts." => "",

        #: app/controllers/UsersController.php:79
        "Please enter a valid email or username." => "",

        #: app/controllers/UsersController.php:81
        #: app/controllers/UsersController.php:91
        #: app/controllers/UsersController.php:198 core/Auth.class.php:123
        #: core/Auth.class.php:196
        "Wrong email and password combination." => "",

        #: app/controllers/UsersController.php:106
        #: storage/themes/default/maintenance.php:10
        #: storage/themes/the23/maintenance.php:14
        "We are currently offline for maintenance. We will be back online as soon as we are done. It should not take long." => "",

        #: app/controllers/UsersController.php:110
        #: app/controllers/UsersController.php:718
        #: app/controllers/UsersController.php:845
        #: app/controllers/UsersController.php:989
        "You have been banned due to abuse. Please contact us for clarification." => "",

        #: app/controllers/UsersController.php:114
        #: app/controllers/UsersController.php:722
        #: app/controllers/UsersController.php:849
        #: app/controllers/UsersController.php:993
        "You haven't activated your account. Please check your email for the activation link. If you haven't received any emails from us, please contact us." => "",

        #: app/controllers/UsersController.php:114
        "Click here to resend" => "",

        #: app/controllers/UsersController.php:136
        "Please enter the 2FA access code to login." => "",

        #: app/controllers/UsersController.php:185
        #: app/controllers/UsersController.php:410
        #: app/controllers/UsersController.php:413
        "You have been successfully registered." => "",

        #: app/controllers/UsersController.php:211
        #: storage/themes/default/auth/2fa.php:14 storage/themes/the23/auth/2fa.php:15
        "Enter your 2FA access code" => "",

        #: app/controllers/UsersController.php:232
        #: app/controllers/UsersController.php:237
        #: app/controllers/UsersController.php:253
        #: app/controllers/user/AccountController.php:527
        "Invalid token. Please try again." => "",

        #: app/controllers/UsersController.php:274
        "You have been successfully logged." => "",

        #: app/controllers/UsersController.php:289
        #: app/controllers/UsersController.php:318
        "We are not accepting users at this time." => "",

        #: app/controllers/UsersController.php:291
        "Register and manage your urls" => "",

        #: app/controllers/UsersController.php:292
        "Register an account and gain control over your urls. Manage them, edit them or remove them without hassle." => "",

        #: app/controllers/UsersController.php:320
        "Please use a social media platform to login or register." => "",

        #: app/controllers/UsersController.php:325
        "The email, the username and the password are required." => "",

        #: app/controllers/UsersController.php:331
        #: app/controllers/user/AccountController.php:385
        "An account is already associated with this email." => "",

        #: app/controllers/UsersController.php:335
        #: app/controllers/UsersController.php:615
        #: app/controllers/user/AccountController.php:398
        "Please enter a valid username." => "",

        #: app/controllers/UsersController.php:336
        #: app/controllers/UsersController.php:617
        "Username already exists." => "",

        #: app/controllers/UsersController.php:340
        #: app/controllers/UsersController.php:621
        "This username cannot be used or already exists. Please choose another username" => "",

        #: app/controllers/UsersController.php:342
        #: app/controllers/UsersController.php:514
        #: app/controllers/UsersController.php:623
        "Password must be at least 5 characters." => "",

        #: app/controllers/UsersController.php:344
        "Your password is too long. Passwords must be between 8 to 64 characters." => "",

        #: app/controllers/UsersController.php:346
        #: app/controllers/UsersController.php:516
        #: app/controllers/UsersController.php:625
        #: app/controllers/user/AccountController.php:412
        "Passwords don't match." => "",

        #: app/controllers/UsersController.php:348
        #: app/controllers/UsersController.php:627
        "You must agree to our terms of service." => "",

        #: app/controllers/UsersController.php:402
        #: app/controllers/UsersController.php:1163
        "An email has been sent to activate your account. Please check your spam folder if you didn't receive it." => "",

        #: app/controllers/UsersController.php:425
        #: app/controllers/UsersController.php:484
        #: storage/themes/default/auth/forgot.php:14
        #: storage/themes/default/auth/forgot.php:32
        #: storage/themes/default/auth/reset.php:14
        #: storage/themes/default/auth/reset.php:39
        #: storage/themes/the23/auth/forgot.php:19
        #: storage/themes/the23/auth/forgot.php:34
        #: storage/themes/the23/auth/reset.php:19
        #: storage/themes/the23/auth/reset.php:39
        "Reset Password" => "",

        #: app/controllers/UsersController.php:426
        #: storage/themes/default/auth/forgot.php:15
        #: storage/themes/the23/auth/forgot.php:20
        "If you forgot your password, you can request a link to reset your password." => "",

        #: app/controllers/UsersController.php:455
        "If an active account is associated with this email, you should receive an email shortly." => "",

        #: app/controllers/UsersController.php:470
        #: app/controllers/UsersController.php:477
        #: app/controllers/UsersController.php:481
        #: app/controllers/UsersController.php:500
        #: app/controllers/UsersController.php:507
        #: app/controllers/UsersController.php:511
        #: app/controllers/UsersController.php:553
        #: app/controllers/UsersController.php:1221
        #: app/controllers/UsersController.php:1224
        #: app/controllers/UsersController.php:1227
        "Token has expired, please request another link." => "",

        #: app/controllers/UsersController.php:519
        "Your new password cannot be the same as the old password." => "",

        #: app/controllers/UsersController.php:539
        "Your password has been changed." => "",

        #: app/controllers/UsersController.php:563
        #: app/controllers/UsersController.php:1159
        "Your email has been successfully verified." => "",

        #: app/controllers/UsersController.php:577
        #: app/controllers/UsersController.php:612
        "The invitation link has expired or is currently unavailable. Please contact administrator." => "",

        #: app/controllers/UsersController.php:586 app/helpers/BioWidgets.php:1504
        "An error occurred. Please try again." => "",

        #: app/controllers/UsersController.php:591
        "Please login to your account to accept this invitation." => "",

        #: app/controllers/UsersController.php:594
        #: storage/themes/default/auth/invite.php:14
        #: storage/themes/the23/auth/invite.php:19
        "Join Team" => "",

        #: app/controllers/UsersController.php:641
        "Your account has been successfully activated." => "",

        #: app/controllers/UsersController.php:656
        "You have been successfully logged out." => "",

        #: app/controllers/UsersController.php:669
        #: app/controllers/UsersController.php:687
        "Sorry, Facebook connect is not available right now." => "",

        #: app/controllers/UsersController.php:671
        "You must grant access to this application to use your facebook account." => "",

        #: app/controllers/UsersController.php:693
        "You must grant permission to this application to use your profile information." => "",

        #: app/controllers/UsersController.php:697
        #: app/controllers/UsersController.php:830
        #: app/controllers/UsersController.php:974
        "The email linked to your account has been already used. If you have used that, please login to your existing account otherwise please contact us." => "",

        #: app/controllers/UsersController.php:794
        #: app/controllers/UsersController.php:797
        #: app/controllers/UsersController.php:907
        #: app/controllers/UsersController.php:910
        #: app/controllers/UsersController.php:1062
        #: app/controllers/UsersController.php:1065
        #: app/controllers/UsersController.php:1115
        #: app/controllers/UsersController.php:1140
        "Welcome! You have been successfully logged in." => "",

        #: app/controllers/UsersController.php:809
        #: app/controllers/UsersController.php:923
        "Sorry, Twitter connect is not available right now." => "",

        #: app/controllers/UsersController.php:812
        "You must grant permission to this application to use your twitter account." => "",

        #: app/controllers/UsersController.php:827
        "And error occurred, please try again later." => "",

        #: app/controllers/UsersController.php:937
        "An error has occurred! Please make sure that you have set up this application as instructed." => "",

        #: app/controllers/UsersController.php:950
        #: app/controllers/UsersController.php:965
        "Sorry, Google connect is not available right now." => "",

        #: app/controllers/UsersController.php:971
        "You must grant permission to this application to use your Google account." => "",

        #: app/controllers/UsersController.php:1079
        "Token has expired, please login manually." => "",

        #: app/controllers/UsersController.php:1086
        #: app/controllers/UsersController.php:1090
        "Token has expired, please login manually" => "",

        #: app/controllers/UsersController.php:1181
        "You have been successfully unsubscribed from newsletters." => "",

        #: app/controllers/UsersController.php:1196
        #: app/controllers/UsersController.php:1202
        "Please enter a valid secret key." => "",

        #: app/controllers/UsersController.php:1200
        "2FA is not active on this account." => "",

        #: app/controllers/UsersController.php:1209
        "An email has been sent to reset 2FA on your account. Please check your spam folder if you didn't receive it." => "",

        #: app/controllers/UsersController.php:1233
        "2FA has been disabled. You may now login without 2FA." => "",

        #: app/controllers/user/AccountController.php:74
        #: storage/themes/default/partials/main_menu.php:153
        #: storage/themes/default/partials/topbar_menu.php:106
        #: storage/themes/default/user/billing.php:1
        #: storage/themes/the23/partials/main_menu.php:190
        "Billing" => "",

        #: app/controllers/user/AccountController.php:91
        "Wow there. You are an admin. You can't cancel your membership." => "",

        #: app/controllers/user/AccountController.php:95 app/helpers/Slack.php:109
        "Something went wrong, please try again." => "",

        #: app/controllers/user/AccountController.php:99
        #: app/controllers/user/AccountController.php:105
        #: app/controllers/user/AccountController.php:252
        #: app/controllers/user/AccountController.php:258
        #: app/controllers/user/AccountController.php:640
        #: app/controllers/user/AccountController.php:646
        "Your password is incorrect." => "",

        #: app/controllers/user/AccountController.php:113
        "Your trial has been canceled." => "",

        #: app/controllers/user/AccountController.php:165
        "Subscription Canceled" => "",

        #: app/controllers/user/AccountController.php:176
        "Your subscription has been canceled." => "",

        #: app/controllers/user/AccountController.php:192
        "Payment not found. Please try again." => "",

        #: app/controllers/user/AccountController.php:227
        #: storage/themes/default/user/billing.php:47
        "View Invoice" => "",

        #: app/controllers/user/AccountController.php:248
        "As an admin, you cannot delete your account from this page." => "",

        #: app/controllers/user/AccountController.php:283
        "Your account has been deleted successfully and your data has been wiped out. If you have any questions please don't hesitate to contact us." => "",

        #: app/controllers/user/AccountController.php:287
        "Your account has been terminated." => "",

        #: app/controllers/user/AccountController.php:322
        "Your account has been successfully terminated." => "",

        #: app/controllers/user/AccountController.php:361
        #: storage/themes/default/bio/edit.php:22
        #: storage/themes/default/bio/edit.php:131
        #: storage/themes/default/bio/edit.php:408
        #: storage/themes/default/partials/main_menu.php:161
        #: storage/themes/default/partials/topbar_menu.php:117
        #: storage/themes/default/user/settings.php:1
        #: storage/themes/the23/partials/main_menu.php:198
        "Settings" => "",

        #: app/controllers/user/AccountController.php:400
        "This username has already been used. Please try again." => "",

        #: app/controllers/user/AccountController.php:410
        "Password must contain at least 5 characters." => "",

        #: app/controllers/user/AccountController.php:416
        "Passwords is the same as the old password." => "",

        #: app/controllers/user/AccountController.php:430
        #: app/controllers/user/AccountController.php:432
        #: app/controllers/user/BioController.php:582
        #: storage/themes/default/bio/edit.php:53
        "Avatar must be either a PNG or a JPEG (Max 500kb)." => "",

        #: app/controllers/user/AccountController.php:436
        #: app/controllers/user/SplashController.php:277
        "Avatar must be either a PNG or a JPEG with a recommended dimension of 200x200." => "",

        #: app/controllers/user/AccountController.php:481
        #: app/controllers/user/AccountController.php:498
        #: app/controllers/user/DashboardController.php:397
        "Account has been successfully updated." => "",

        #: app/controllers/user/AccountController.php:481
        "You have changed your email. Please check your email before logging out and activate your account." => "",

        #: app/controllers/user/AccountController.php:533
        "2FA has been activated on your account. Please make sure to backup the secret key or the QR code." => "",

        #: app/controllers/user/AccountController.php:544
        "2FA has been disabled on your account." => "",

        #: app/controllers/user/AccountController.php:566
        "API key has been regenerated successfully. Please do not forget to update your application." => "",

        #: app/controllers/user/AccountController.php:599
        #: storage/themes/default/user/confirmation.php:3
        "Order Confirmation" => "",

        #: app/controllers/user/AccountController.php:663
        "You have been logged out of all devices." => "",

        #: app/controllers/user/AccountController.php:701
        #: storage/themes/default/partials/main_menu.php:159
        #: storage/themes/default/partials/topbar_menu.php:115
        #: storage/themes/default/user/security.php:1
        #: storage/themes/the23/partials/main_menu.php:196
        "Security" => "",

        #: app/controllers/user/BioController.php:120
        #: storage/themes/default/user/import.php:52
        "Import" => "",

        #: app/controllers/user/BioController.php:120
        "We have detected that you have an old bio page. Do you want to import it?<br><br><a href=\\\"?importoldbio=true\\\" class=\\\"btn btn-primary\\\">" => "",

        #: app/controllers/user/BioController.php:154
        "You have reach the maximum limit for this feature." => "",

        #: app/controllers/user/BioController.php:157
        #: app/controllers/user/BioController.php:492
        "Please enter a name for your profile." => "",

        #: app/controllers/user/BioController.php:161
        #: app/controllers/user/BioController.php:500 app/traits/Links.php:154
        #: app/traits/Links.php:593
        "Custom alias must be at least 3 characters." => "",

        #: app/controllers/user/BioController.php:164
        #: app/controllers/user/BioController.php:503 app/traits/Links.php:157
        #: app/traits/Links.php:596
        "Inappropriate aliases are not allowed." => "",

        #: app/controllers/user/BioController.php:167
        #: app/controllers/user/BioController.php:170
        #: app/controllers/user/BioController.php:173
        #: app/controllers/user/BioController.php:506
        #: app/controllers/user/BioController.php:509
        #: app/controllers/user/BioController.php:512 app/traits/Links.php:160
        #: app/traits/Links.php:163 app/traits/Links.php:166 app/traits/Links.php:599
        #: app/traits/Links.php:602 app/traits/Links.php:605
        "That alias is taken. Please choose another one." => "",

        #: app/controllers/user/BioController.php:176
        #: app/controllers/user/BioController.php:515 app/traits/Links.php:169
        #: app/traits/Links.php:608
        "That alias is reserved. Please choose another one." => "",

        #: app/controllers/user/BioController.php:179
        #: app/controllers/user/BioController.php:518 app/traits/Links.php:172
        #: app/traits/Links.php:611
        "That is a premium alias and is reserved to only pro members." => "",

        #: app/controllers/user/BioController.php:259
        "Profile has been successfully created." => "",

        #: app/controllers/user/BioController.php:282
        #: app/controllers/user/BioController.php:309
        #: app/controllers/user/BioController.php:487
        #: app/controllers/user/BioController.php:866
        #: app/controllers/user/BioController.php:970
        #: app/controllers/user/BioController.php:1108
        "Profile does not exist." => "",

        #: app/controllers/user/BioController.php:292
        "Profile has been successfully deleted." => "",

        #: app/controllers/user/BioController.php:353
        #: storage/themes/default/bio/edit.php:3
        #: storage/themes/default/partials/shortener.php:114
        "Customize" => "",

        #: app/controllers/user/BioController.php:540
        #: app/controllers/user/BioController.php:542 app/traits/Links.php:387
        #: app/traits/Links.php:389 app/traits/Links.php:760 app/traits/Links.php:762
        "Banner must be either a PNG or a JPEG (Max 500kb)." => "",

        #: app/controllers/user/BioController.php:604
        #: app/controllers/user/BioController.php:624
        "Background must be either a PNG or a JPEG (Max 1mb)." => "",

        #: app/controllers/user/BioController.php:709
        "Profile has been successfully updated." => "",

        #: app/controllers/user/BioController.php:759 app/helpers/Gate.php:453
        "More share options" => "",

        #: app/controllers/user/BioController.php:786 app/helpers/BioWidgets.php:805
        #: app/helpers/Gate.php:480 storage/themes/default/bio/edit.php:444
        "Sensitive Content" => "",

        #: app/controllers/user/BioController.php:789 app/helpers/Gate.php:483
        "This page contains sensitive content which may not be suitable for all ages. By continuing, you agree to our terms of service." => "",

        #: app/controllers/user/BioController.php:792 app/helpers/Gate.php:486
        "Go Back" => "",

        #: app/controllers/user/BioController.php:793 app/helpers/BioWidgets.php:1551
        #: app/helpers/Gate.php:214 app/helpers/Gate.php:487
        #: storage/themes/default/layouts/dashboard.php:128
        "Continue" => "",

        #: app/controllers/user/BioController.php:873
        "Profile has been set as default and can now be access via your profile page." => "",

        #: app/controllers/user/BioController.php:875
        "Profile has been set as default and can now be access via your profile page. Your profile setting is currently set on private." => "",

        #: app/controllers/user/BioController.php:974
        "An error occurred. This profile cannot be duplicated." => "",

        #: app/controllers/user/BioController.php:1038
        #: app/controllers/user/QRController.php:884 app/traits/Overlays.php:361
        #: storage/themes/default/bio/edit.php:578
        #: storage/themes/default/bio/index.php:80
        #: storage/themes/default/gates/media.php:29
        #: storage/themes/default/gates/profile.php:144
        #: storage/themes/default/index.php:17
        #: storage/themes/default/overlay/create_coupon.php:35
        #: storage/themes/default/overlay/edit_coupon.php:35
        #: storage/themes/default/partials/links.php:97
        #: storage/themes/default/partials/shortenermodal.php:144
        #: storage/themes/default/user/affiliate.php:12
        #: storage/themes/default/user/campaigns.php:52
        #: storage/themes/default/user/campaigns.php:59
        #: storage/themes/default/user/channel.php:44
        #: storage/themes/default/user/edit.php:404
        #: storage/themes/default/user/edit.php:407
        #: storage/themes/default/user/links.php:204
        #: storage/themes/default/user/security.php:84
        #: storage/themes/default/user/security.php:115
        #: storage/themes/default/user/settings.php:218
        #: storage/themes/default/user/settings.php:233
        #: storage/themes/default/user/settings.php:309
        #: storage/themes/the23/gates/media.php:30 storage/themes/the23/index.php:18
        "Copy" => "",

        #: app/controllers/user/BioController.php:1059
        #: app/controllers/user/QRController.php:895
        "Item has been successfully duplicated." => "",

        #: app/controllers/user/BioController.php:1124
        "Block has been successfully updated." => "",

        #: app/controllers/user/CampaignsController.php:60 app/helpers/App.php:429
        #: storage/themes/default/partials/sidebar_menu.php:147
        #: storage/themes/default/teams/edit.php:60
        #: storage/themes/default/teams/index.php:66
        #: storage/themes/default/user/campaigns.php:3
        #: storage/themes/default/user/index.php:281
        #: storage/themes/default/user/links.php:230
        "Campaigns" => "",

        #: app/controllers/user/CampaignsController.php:83
        #: app/controllers/user/CampaignsController.php:166
        "Campaign name cannot be empty and must have at least 2 characters." => "",

        #: app/controllers/user/CampaignsController.php:87
        #: app/controllers/user/CampaignsController.php:170
        "You already have a campaign with that name." => "",

        #: app/controllers/user/CampaignsController.php:95
        #: app/controllers/user/CampaignsController.php:181
        "This slug is currently not available. Please choose another one." => "",

        #: app/controllers/user/CampaignsController.php:143
        "Campaign was successfully created. You may start adding links to it now." => "",

        #: app/controllers/user/CampaignsController.php:162
        "Campaign does not exist" => "",

        #: app/controllers/user/CampaignsController.php:189
        "Campaign was updated successfully." => "",

        #: app/controllers/user/CampaignsController.php:213
        #: app/controllers/user/CampaignsController.php:230
        "Campaign not found. Please try again." => "",

        #: app/controllers/user/CampaignsController.php:218
        "Campaign has been deleted." => "",

        #: app/controllers/user/CampaignsController.php:273
        #: storage/themes/default/user/campaignstats.php:3
        "Campaign Statistics" => "",

        #: app/controllers/user/ChannelsController.php:53 app/helpers/App.php:422
        #: storage/themes/default/bio/index.php:217
        #: storage/themes/default/partials/sidebar_menu.php:94
        #: storage/themes/default/qr/index.php:182
        #: storage/themes/default/teams/edit.php:60
        #: storage/themes/default/teams/edit.php:61
        #: storage/themes/default/teams/edit.php:62
        #: storage/themes/default/teams/edit.php:63
        #: storage/themes/default/teams/index.php:66
        #: storage/themes/default/teams/index.php:67
        #: storage/themes/default/teams/index.php:68
        #: storage/themes/default/teams/index.php:69
        #: storage/themes/default/user/channels.php:3
        #: storage/themes/default/user/channels.php:14
        #: storage/themes/default/user/confirmation.php:84
        #: storage/themes/default/user/edit.php:479
        #: storage/themes/default/user/index.php:310
        #: storage/themes/default/user/links.php:259
        "Channels" => "",

        #: app/controllers/user/ChannelsController.php:163
        #: storage/themes/default/partials/shortener.php:77
        #: storage/themes/default/partials/shortenermodal.php:74
        "Channel" => "",

        #: app/controllers/user/ChannelsController.php:190
        #: app/controllers/user/ChannelsController.php:227
        "Channel name cannot be empty and must have at least 2 characters." => "",

        #: app/controllers/user/ChannelsController.php:203
        "Channel was successfully created. You may start adding links to it now." => "",

        #: app/controllers/user/ChannelsController.php:222
        #: app/controllers/user/ChannelsController.php:262
        #: app/controllers/user/ChannelsController.php:345
        "Channel does not exist" => "",

        #: app/controllers/user/ChannelsController.php:236
        "Channel was updated successfully." => "",

        #: app/controllers/user/ChannelsController.php:269
        "Channel has been successfully deleted." => "",

        #: app/controllers/user/ChannelsController.php:283
        "You need to select at least 1 channel." => "",

        #: app/controllers/user/ChannelsController.php:322
        "Selected items have been added to the {c} channel." => "",

        #: app/controllers/user/ChannelsController.php:350
        "Item has been removed from the channel." => "",

        #: app/controllers/user/DashboardController.php:41
        #: app/helpers/payments/Paddle.php:540 app/helpers/payments/PaypalApi.php:336
        #: app/helpers/payments/PaypalApi.php:399
        "Your payment was successfully made. Thank you." => "",

        #: app/controllers/user/DashboardController.php:81
        #: storage/themes/default/partials/main_menu.php:140
        #: storage/themes/default/partials/main_menu.php:185
        #: storage/themes/default/partials/sidebar_menu.php:47
        #: storage/themes/the23/partials/main_menu.php:178
        #: storage/themes/the23/partials/main_menu.php:188
        "Dashboard" => "",

        #: app/controllers/user/DashboardController.php:104
        #: app/controllers/user/StatsController.php:85
        #: storage/themes/default/index.php:635
        #: storage/themes/default/partials/sidebar_menu.php:107
        #: storage/themes/default/teams/edit.php:13
        #: storage/themes/default/teams/index.php:19
        #: storage/themes/default/user/campaigns.php:65
        #: storage/themes/default/user/channel.php:22
        #: storage/themes/default/user/index.php:8
        #: storage/themes/default/user/links.php:105
        #: storage/themes/default/user/stats.php:14 storage/themes/the23/index.php:6
        #: storage/themes/the23/index.php:668
        "Links" => "",

        #: app/controllers/user/DashboardController.php:111
        "Campaign Links" => "",

        #: app/controllers/user/DashboardController.php:194
        #: storage/themes/default/partials/sidebar_menu.php:112
        "Archived Links" => "",

        #: app/controllers/user/DashboardController.php:223
        #: storage/themes/default/partials/sidebar_menu.php:117
        "Expired Links" => "",

        #: app/controllers/user/DashboardController.php:338
        "No results found" => "",

        #: app/controllers/user/DashboardController.php:340
        "{c} Results" => "",

        #: app/controllers/user/DashboardController.php:351
        #: storage/themes/default/layouts/api.php:66
        #: storage/themes/default/layouts/auth.php:33
        #: storage/themes/default/layouts/dashboard.php:134
        #: storage/themes/default/layouts/main.php:74
        #: storage/themes/default/layouts/stats.php:73
        #: storage/themes/the23/partials/languagejs.php:6
        "Keyword must be more than 3 characters!" => "",

        #: app/controllers/user/DashboardController.php:367
        "Affiliate Referrals" => "",

        #: app/controllers/user/DomainsController.php:75 app/helpers/App.php:410
        #: storage/themes/default/domains/index.php:3
        #: storage/themes/default/partials/sidebar_menu.php:175
        #: storage/themes/default/teams/edit.php:54
        #: storage/themes/default/user/confirmation.php:83
        "Branded Domains" => "",

        #: app/controllers/user/DomainsController.php:98
        #: storage/themes/default/domains/new.php:1
        "New Domain" => "",

        #: app/controllers/user/DomainsController.php:140
        #: app/controllers/user/DomainsController.php:149
        "A valid domain name is required." => "",

        #: app/controllers/user/DomainsController.php:144
        "The domain has been already used." => "",

        #: app/controllers/user/DomainsController.php:155
        "A valid url is required for the root domain." => "",

        #: app/controllers/user/DomainsController.php:157
        "A valid url is required for the 404 page." => "",

        #: app/controllers/user/DomainsController.php:177
        "A new domain was added." => "",

        #: app/controllers/user/DomainsController.php:178
        "A customer ({e}) added a new domain to the platform. Please make sure the domain is pointed correctly and is resolving as expected. Their domain name is {d}." => "",

        #: app/controllers/user/DomainsController.php:181
        "Domain has been added successfully" => "",

        #: app/controllers/user/DomainsController.php:200
        #: app/controllers/user/DomainsController.php:241
        #: app/controllers/user/DomainsController.php:280
        "Domain not found. Please try again." => "",

        #: app/controllers/user/DomainsController.php:203
        #: storage/themes/default/domains/edit.php:1
        #: storage/themes/default/domains/index.php:56
        "Edit Domain" => "",

        #: app/controllers/user/DomainsController.php:255
        "Domain has been updated successfully." => "",

        #: app/controllers/user/DomainsController.php:285
        "Domain has been deleted." => "",

        #: app/controllers/user/ExportController.php:121
        #: app/controllers/user/ExportController.php:164
        "Please specify a range." => "",

        #: app/controllers/user/ImportController.php:53
        "Import Links via CSV" => "",

        #: app/controllers/user/ImportController.php:79
        #: app/controllers/user/ImportController.php:83
        "Incorrect format or empty file. Please upload .csv file." => "",

        #: app/controllers/user/ImportController.php:87
        "File is larger than {s}mb." => "",

        #: app/controllers/user/ImportController.php:95
        "No links found." => "",

        #: app/controllers/user/ImportController.php:113
        "The CSV file contains {num} links and it will be processed in the background. You can review the progress on this page." => "",

        #: app/controllers/user/ImportController.php:140
        "{num} links were successfully imported but some errors occurred:" => "",

        #: app/controllers/user/ImportController.php:143
        "{num} links were successfully imported." => "",

        #: app/controllers/user/ImportController.php:165
        "Import has been canceled." => "",

        #: app/controllers/user/IntegrationsController.php:43
        #: storage/themes/default/index.php:511
        #: storage/themes/default/integrations/index.php:3
        #: storage/themes/default/partials/sidebar_menu.php:212
        #: storage/themes/the23/index.php:543
        "Integrations" => "",

        #: app/controllers/user/IntegrationsController.php:61
        "Zapier" => "",

        #: app/controllers/user/IntegrationsController.php:65
        "Connect with Zapier and receive requests when a new short url is generated or a new click is made." => "",

        #: app/controllers/user/IntegrationsController.php:70
        "WordPress" => "",

        #: app/controllers/user/IntegrationsController.php:74
        "Install our WP plugin and start shortening links directly from WordPress using a shortcode." => "",

        #: app/controllers/user/IntegrationsController.php:79
        "Shortcuts" => "",

        #: app/controllers/user/IntegrationsController.php:83
        "Use our powerful Shortcut in your iOS device and shorten links easily and quickly." => "",

        #: app/controllers/user/IntegrationsController.php:91
        "Slack" => "",

        #: app/controllers/user/IntegrationsController.php:95
        "Connect our app with Slack and start shortening links directly from your Slack workspace." => "",

        #: app/controllers/user/IntegrationsController.php:124
        #: storage/themes/default/integrations/slack.php:4
        "Slack Integration" => "",

        #: app/controllers/user/IntegrationsController.php:139
        #: storage/themes/default/integrations/zapier.php:4
        "Zapier Integration" => "",

        #: app/controllers/user/IntegrationsController.php:159
        #: storage/themes/default/integrations/wordpress.php:3
        "WordPress Integration" => "",

        #: app/controllers/user/IntegrationsController.php:177
        #: storage/themes/default/integrations/shortcuts.php:3
        "Shortcuts Integration" => "",

        #: app/controllers/user/IntegrationsController.php:204
        "Plugin cannot be generated. Please contact us for more information." => "",

        #: app/controllers/user/OverlayController.php:75 app/helpers/App.php:1046
        #: storage/themes/default/overlay/create.php:31
        #: storage/themes/default/overlay/index.php:2
        #: storage/themes/default/overlay/index.php:12
        #: storage/themes/default/overlay/index.php:17
        #: storage/themes/default/partials/sidebar_menu.php:161
        #: storage/themes/default/teams/edit.php:40
        #: storage/themes/default/teams/index.php:46
        #: storage/themes/default/user/confirmation.php:80
        "CTA Overlay" => "",

        #: app/controllers/user/OverlayController.php:104
        #: storage/themes/default/overlay/create.php:3
        #: storage/themes/default/overlay/index.php:70
        "Create a CTA Overlay" => "",

        #: app/controllers/user/OverlayController.php:152
        #: app/controllers/user/OverlayController.php:180
        "Overlay page does not exist." => "",

        #: app/controllers/user/OverlayController.php:301
        #: app/controllers/user/OverlayController.php:461
        #: app/helpers/BioWidgets.php:3329 storage/themes/default/bio/index.php:132
        #: storage/themes/default/overlay/create_contact.php:12
        #: storage/themes/default/overlay/create_contact.php:62
        #: storage/themes/default/overlay/create_contact.php:158
        #: storage/themes/default/overlay/create_coupon.php:12
        #: storage/themes/default/overlay/create_image.php:12
        #: storage/themes/default/overlay/create_message.php:12
        #: storage/themes/default/overlay/create_newsletter.php:12
        #: storage/themes/default/overlay/create_poll.php:12
        #: storage/themes/default/overlay/edit_contact.php:12
        #: storage/themes/default/overlay/edit_coupon.php:12
        #: storage/themes/default/overlay/edit_image.php:12
        #: storage/themes/default/overlay/edit_message.php:12
        #: storage/themes/default/overlay/edit_newsletter.php:12
        #: storage/themes/default/overlay/edit_poll.php:12
        #: storage/themes/default/pages/contact.php:21
        #: storage/themes/default/pages/contact.php:22
        #: storage/themes/default/splash/create.php:11
        #: storage/themes/default/splash/edit.php:16
        #: storage/themes/default/user/campaigns.php:30
        #: storage/themes/default/user/channel.php:90
        #: storage/themes/default/user/channels.php:90
        #: storage/themes/default/user/channels.php:132
        #: storage/themes/default/user/settings.php:28
        #: storage/themes/the23/pages/contact.php:45
        #: storage/themes/the23/pages/contact.php:46
        "Name" => "",

        #: app/controllers/user/OverlayController.php:302
        #: app/controllers/user/OverlayController.php:462
        #: app/helpers/BioWidgets.php:2072 app/helpers/BioWidgets.php:2829
        #: app/helpers/BioWidgets.php:2925 app/helpers/BioWidgets.php:3134
        #: storage/themes/default/auth/2fa.php:54
        #: storage/themes/default/auth/forgot.php:22
        #: storage/themes/default/auth/invite.php:22
        #: storage/themes/default/overlay/create_contact.php:69
        #: storage/themes/default/overlay/create_contact.php:162
        #: storage/themes/default/pages/contact.php:25
        #: storage/themes/default/pages/contact.php:26
        #: storage/themes/default/pages/qr.php:26
        #: storage/themes/default/pages/qr.php:53
        #: storage/themes/default/pages/qr.php:113
        #: storage/themes/default/pages/report.php:21
        #: storage/themes/default/pages/report.php:22
        #: storage/themes/default/qr/edit.php:57 storage/themes/default/qr/edit.php:61
        #: storage/themes/default/qr/edit.php:170
        #: storage/themes/default/qr/edit.php:249 storage/themes/default/qr/new.php:34
        #: storage/themes/default/qr/new.php:69 storage/themes/default/qr/new.php:73
        #: storage/themes/default/qr/new.php:185 storage/themes/default/qr/new.php:270
        #: storage/themes/default/teams/edit.php:7
        #: storage/themes/default/teams/index.php:14
        #: storage/themes/default/user/settings.php:36
        #: storage/themes/the23/auth/2fa.php:53 storage/themes/the23/auth/forgot.php:27
        #: storage/themes/the23/auth/invite.php:27
        #: storage/themes/the23/auth/register.php:60
        #: storage/themes/the23/pages/contact.php:51
        #: storage/themes/the23/pages/contact.php:52
        #: storage/themes/the23/pages/qr.php:27 storage/themes/the23/pages/qr.php:54
        #: storage/themes/the23/pages/qr.php:114
        #: storage/themes/the23/pages/report.php:13
        #: storage/themes/the23/pages/report.php:14
        "Email" => "",

        #: app/controllers/user/OverlayController.php:303
        #: app/controllers/user/OverlayController.php:463
        #: app/helpers/BioWidgets.php:1732 app/helpers/BioWidgets.php:2929
        #: storage/themes/default/overlay/create_contact.php:76
        #: storage/themes/default/overlay/create_contact.php:166
        #: storage/themes/default/pages/contact.php:29
        #: storage/themes/default/pages/qr.php:61
        #: storage/themes/default/pages/qr.php:81 storage/themes/default/qr/edit.php:69
        #: storage/themes/default/qr/edit.php:99 storage/themes/default/qr/edit.php:116
        #: storage/themes/default/qr/edit.php:133 storage/themes/default/qr/new.php:81
        #: storage/themes/default/qr/new.php:107 storage/themes/default/qr/new.php:122
        #: storage/themes/default/qr/new.php:150
        #: storage/themes/the23/pages/contact.php:57
        #: storage/themes/the23/pages/qr.php:62 storage/themes/the23/pages/qr.php:82
        "Message" => "",

        #: app/controllers/user/OverlayController.php:304
        #: app/controllers/user/OverlayController.php:464
        "send" => "",

        #: app/controllers/user/OverlayController.php:312
        #: app/controllers/user/OverlayController.php:472
        #: app/controllers/user/OverlayController.php:600
        #: app/controllers/user/OverlayController.php:742
        #: app/controllers/user/OverlayController.php:891
        #: app/controllers/user/OverlayController.php:1059
        #: app/controllers/user/OverlayController.php:1183
        #: app/controllers/user/OverlayController.php:1319
        #: app/controllers/user/OverlayController.php:1467
        #: app/controllers/user/OverlayController.php:1601
        #: app/controllers/user/OverlayController.php:1748
        #: app/controllers/user/OverlayController.php:1867
        "The name field cannot be empty." => "",

        #: app/controllers/user/OverlayController.php:346
        #: app/controllers/user/OverlayController.php:636
        #: app/controllers/user/OverlayController.php:937
        #: app/controllers/user/OverlayController.php:1236
        #: app/controllers/user/OverlayController.php:1492
        #: app/controllers/user/OverlayController.php:1774
        "Overlay has been successfully created." => "",

        #: app/controllers/user/OverlayController.php:363
        #: app/controllers/user/OverlayController.php:653
        #: app/controllers/user/OverlayController.php:954
        #: app/controllers/user/OverlayController.php:1253
        #: app/controllers/user/OverlayController.php:1522
        #: app/controllers/user/OverlayController.php:1791
        #: storage/themes/default/bio/index.php:52
        #: storage/themes/default/overlay/index.php:43
        #: storage/themes/default/partials/links.php:12
        #: storage/themes/default/splash/index.php:43
        #: storage/themes/default/user/campaigns.php:67
        #: storage/themes/default/user/channel.php:7
        #: storage/themes/default/user/channel.php:33
        #: storage/themes/default/user/channels.php:30
        #: storage/themes/default/user/channels.php:60
        "Edit" => "",

        #: app/controllers/user/OverlayController.php:502
        #: app/controllers/user/OverlayController.php:773
        #: app/controllers/user/OverlayController.php:1104
        #: app/controllers/user/OverlayController.php:1375
        #: app/controllers/user/OverlayController.php:1622
        #: app/controllers/user/OverlayController.php:1889
        "Overlay has been successfully updated." => "",

        #: app/controllers/user/OverlayController.php:602
        #: app/controllers/user/OverlayController.php:744
        "Please enter a valid question." => "",

        #: app/controllers/user/OverlayController.php:604
        #: app/controllers/user/OverlayController.php:746
        "A minimum of two options is required." => "",

        #: app/controllers/user/OverlayController.php:618
        #: app/controllers/user/OverlayController.php:760 app/traits/Overlays.php:272
        #: storage/themes/default/overlay/create_poll.php:48
        #: storage/themes/default/overlay/create_poll.php:111
        "Vote" => "",

        #: app/controllers/user/OverlayController.php:893
        #: app/controllers/user/OverlayController.php:1061
        #: app/controllers/user/OverlayController.php:1752
        #: app/controllers/user/OverlayController.php:1871
        "The message field cannot be empty." => "",

        #: app/controllers/user/OverlayController.php:914
        #: app/controllers/user/OverlayController.php:916
        #: app/controllers/user/OverlayController.php:1082
        #: app/controllers/user/OverlayController.php:1084
        #: app/controllers/user/OverlayController.php:1197
        #: app/controllers/user/OverlayController.php:1199
        #: app/controllers/user/OverlayController.php:1333
        #: app/controllers/user/OverlayController.php:1335
        #: app/controllers/user/QRController.php:314
        #: app/controllers/user/QRController.php:420
        #: app/controllers/user/QRController.php:724
        #: app/controllers/user/QRController.php:1103
        "Logo must be either a PNG or a JPEG (Max 500kb)." => "",

        #: app/controllers/user/OverlayController.php:920
        #: app/controllers/user/OverlayController.php:1088
        #: app/controllers/user/OverlayController.php:1203
        #: app/controllers/user/OverlayController.php:1339
        "Logo must be either a PNG or a JPEG with a recommended dimension of 100x100." => "",

        #: app/controllers/user/OverlayController.php:1187
        "You need to upload your logo and/or a background." => "",

        #: app/controllers/user/OverlayController.php:1213
        #: app/controllers/user/OverlayController.php:1215
        #: app/controllers/user/OverlayController.php:1353
        #: app/controllers/user/OverlayController.php:1355
        "Image must be either a PNG or a JPEG (Max 1mb)." => "",

        #: app/controllers/user/OverlayController.php:1219
        #: app/controllers/user/OverlayController.php:1359
        "Image must be either a PNG or a JPEG with a recommended dimension of 600x150." => "",

        #: app/controllers/user/OverlayController.php:1645
        "Overlay not found. Please try again." => "",

        #: app/controllers/user/OverlayController.php:1658
        "Overlay has been deleted." => "",

        #: app/controllers/user/OverlayController.php:1750
        #: app/controllers/user/OverlayController.php:1869
        "The coupon field cannot be empty." => "",

        #: app/controllers/user/PixelsController.php:78 app/helpers/App.php:416
        #: storage/themes/default/partials/sidebar_menu.php:168
        #: storage/themes/default/pixels/index.php:3
        #: storage/themes/default/pixels/index.php:19
        #: storage/themes/default/teams/edit.php:47
        #: storage/themes/default/teams/index.php:53 storage/themes/the23/index.php:594
        "Tracking Pixels" => "",

        #: app/controllers/user/PixelsController.php:107
        "New Pixel" => "",

        #: app/controllers/user/PixelsController.php:132
        "Pixel provider is currently not supported." => "",

        #: app/controllers/user/PixelsController.php:145
        #: app/controllers/user/PixelsController.php:216
        "Please enter valid id." => "",

        #: app/controllers/user/PixelsController.php:155
        "A pixel with this provider and tag already exists." => "",

        #: app/controllers/user/PixelsController.php:167
        "Pixel has been added successfully" => "",

        #: app/controllers/user/PixelsController.php:185
        #: app/controllers/user/PixelsController.php:211
        #: app/controllers/user/PixelsController.php:254
        "Pixel not found. Please try again." => "",

        #: app/controllers/user/PixelsController.php:188
        #: storage/themes/default/pixels/index.php:55
        "Edit Pixel" => "",

        #: app/controllers/user/PixelsController.php:230
        "Pixel has been updated successfully." => "",

        #: app/controllers/user/PixelsController.php:264
        "Pixel has been deleted." => "",

        #: app/controllers/user/PixelsController.php:288
        "You need to select at least 1 pixel." => "",

        #: app/controllers/user/PixelsController.php:292 app/models/Plans.php:48
        "Please choose a premium package to unlock this feature." => "",

        #: app/controllers/user/PixelsController.php:318
        "Selected items have been assign pixels." => "",

        #: app/controllers/user/QRController.php:121
        #: storage/themes/default/qr/index.php:7
        #: storage/themes/default/qr/index.php:127 storage/themes/default/qr/new.php:1
        #: storage/themes/default/teams/edit.php:20
        #: storage/themes/default/teams/index.php:26
        "Create QR" => "",

        #: app/controllers/user/QRController.php:237
        #: app/controllers/user/QRController.php:358
        #: app/controllers/user/QRController.php:645
        #: app/controllers/user/QRController.php:1027
        "Please enter a name for your QR code." => "",

        #: app/controllers/user/QRController.php:239
        #: app/controllers/user/QRController.php:356
        #: app/controllers/user/QRController.php:1025 app/helpers/QR.php:420
        #: app/helpers/QR.php:449 app/helpers/QR.php:467
        "Invalid QR format or missing data" => "",

        #: app/controllers/user/QRController.php:295
        "Maximum limit for text label is 20" => "",

        #: app/controllers/user/QRController.php:336
        #: storage/themes/default/qr/edit.php:780
        "Your QR code might not be readable. Please scan it with your phone to verify." => "",

        #: app/controllers/user/QRController.php:465
        #: app/controllers/user/QRController.php:685 app/traits/Links.php:113
        #: app/traits/Links.php:116 app/traits/Links.php:119 app/traits/Links.php:548
        #: app/traits/Links.php:551 app/traits/Links.php:554
        "URL is suspected to contain malware and other harmful content." => "",

        #: app/controllers/user/QRController.php:504
        "QR Code has been successfully generated." => "",

        #: app/controllers/user/QRController.php:608
        #: storage/themes/default/qr/edit.php:4 storage/themes/default/qr/index.php:81
        #: storage/themes/default/teams/edit.php:21
        #: storage/themes/default/teams/index.php:27
        "Edit QR" => "",

        #: app/controllers/user/QRController.php:642
        "QR does not exist." => "",

        #: app/controllers/user/QRController.php:800
        "QR Code has been successfully updated." => "",

        #: app/controllers/user/QRController.php:839
        "QR has been successfully deleted." => "",

        #: app/controllers/user/QRController.php:920
        #: storage/themes/default/qr/bulk.php:1
        "Create QR in Bulk" => "",

        #: app/controllers/user/QRController.php:1054
        "You have reached your limit. {i}/{j} QR codes have been generated." => "",

        #: app/controllers/user/QRController.php:1190
        "{i}/{j} QR codes have been generated." => "",

        #: app/controllers/user/QRController.php:1208
        #: app/controllers/user/QRController.php:1244
        "You must select at least 1 QR code." => "",

        #: app/controllers/user/QRController.php:1228
        "{n} QR codes have been successfully deleted." => "",

        #: app/controllers/user/SplashController.php:69
        #: storage/themes/default/splash/index.php:2
        #: storage/themes/default/splash/index.php:12
        #: storage/themes/default/splash/index.php:17
        "Custom Splash Pages" => "",

        #: app/controllers/user/SplashController.php:95
        #: storage/themes/default/splash/create.php:1
        #: storage/themes/default/splash/index.php:69
        "Create a Custom Splash" => "",

        #: app/controllers/user/SplashController.php:128
        #: app/controllers/user/SplashController.php:249
        "The name, title, message and link cannot be empty." => "",

        #: app/controllers/user/SplashController.php:132
        #: app/controllers/user/SplashController.php:252
        "Please enter a valid counter time in seconds." => "",

        #: app/controllers/user/SplashController.php:147
        #: app/controllers/user/SplashController.php:271
        #: app/controllers/user/SplashController.php:273
        #: storage/themes/default/splash/create.php:48
        "Avatar must be one the following formats {f} and be less than {s}kb." => "",

        #: app/controllers/user/SplashController.php:149
        #: app/controllers/user/SplashController.php:151
        #: app/controllers/user/SplashController.php:155
        "Avatar must be the one following formats {f} and be less than {s}kb." => "",

        #: app/controllers/user/SplashController.php:167
        #: app/controllers/user/SplashController.php:169
        #: app/controllers/user/SplashController.php:171
        #: app/controllers/user/SplashController.php:175
        "Banner must be the one following formats {f} and be less than {s}kb." => "",

        #: app/controllers/user/SplashController.php:195
        "Custom splash page has been created." => "",

        #: app/controllers/user/SplashController.php:212
        #: app/controllers/user/SplashController.php:246
        #: app/controllers/user/SplashController.php:335
        "Custom splash page does not exist." => "",

        #: app/controllers/user/SplashController.php:225
        #: storage/themes/default/splash/edit.php:2
        "Update a Custom Splash" => "",

        #: app/controllers/user/SplashController.php:294
        #: app/controllers/user/SplashController.php:296
        "Banner must be one the following formats {f} and be less than {s}kb." => "",

        #: app/controllers/user/SplashController.php:300
        "Banner must be either a PNG or a JPEG with a recommended dimension of 980x300." => "",

        #: app/controllers/user/SplashController.php:317
        "Custom splash page has been updated." => "",

        #: app/controllers/user/SplashController.php:348
        "Custom splash page has been deleted." => "",

        #: app/controllers/user/StatsController.php:40
        #: storage/themes/default/bio/index.php:54
        #: storage/themes/default/partials/links.php:10
        #: storage/themes/default/partials/sidebar_menu.php:90
        #: storage/themes/default/qr/index.php:78
        #: storage/themes/default/user/campaigns.php:69
        #: storage/themes/default/user/channel.php:30
        #: storage/themes/default/user/edit.php:8
        #: storage/themes/default/user/stats.php:3
        "Statistics" => "",

        #: app/controllers/user/StatsController.php:187
        #: storage/themes/default/stats/activity.php:10
        #: storage/themes/default/stats/index.php:25
        #: storage/themes/default/user/activity.php:2
        #: storage/themes/default/user/index.php:139
        "Recent Activity" => "",

        #: app/controllers/user/TeamsController.php:91
        #: storage/themes/default/teams/index.php:3
        "Manage Members" => "",

        #: app/controllers/user/TeamsController.php:121
        "You cannot invite yourself. Please enter another email." => "",

        #: app/controllers/user/TeamsController.php:124
        "This email address has been invited." => "",

        #: app/controllers/user/TeamsController.php:128
        "No permission has been assigned for this user." => "",

        #: app/controllers/user/TeamsController.php:161
        "An invite has been sent to the email." => "",

        #: app/controllers/user/TeamsController.php:174
        #: app/controllers/user/TeamsController.php:195
        #: app/controllers/user/TeamsController.php:227
        #: app/controllers/user/TeamsController.php:251
        "Team member does not exist." => "",

        #: app/controllers/user/TeamsController.php:204
        "Team member has been updated successfully." => "",

        #: app/controllers/user/TeamsController.php:237
        "Team member has been removed successfully." => "",

        #: app/controllers/user/TeamsController.php:254
        "Team member needs to accept invitation." => "",

        #: app/controllers/user/TeamsController.php:259
        "Team member has been enabled." => "",

        #: app/controllers/user/TeamsController.php:263
        "Team member has been disabled." => "",

        #: app/controllers/user/TeamsController.php:280
        "You are now using your individual space." => "",

        #: app/controllers/user/TeamsController.php:287
        "You are now using your team workspace." => "",

        #: app/controllers/user/TeamsController.php:310
        "You have accepted your team's invite." => "",

        #: app/controllers/user/ToolsController.php:37
        #: storage/themes/default/partials/sidebar_menu.php:217
        #: storage/themes/default/partials/sidebar_menu.php:220
        #: storage/themes/default/user/tools.php:1
        "Tools" => "",

        #: app/controllers/user/ToolsController.php:62
        "The application has been installed on your Slack account. You can now use the command to shorten links directly from your conversations." => "",

        #: app/controllers/user/ToolsController.php:69
        "An error occurred and slack has not been installed." => "",

        #: app/controllers/user/ToolsController.php:89
        "Your Zapier URL has been updated." => "",

        #: app/controllers/user/VerificationController.php:50
        #: storage/themes/default/partials/topbar_menu.php:112
        #: storage/themes/default/user/verification.php:4
        "Get Verified" => "",

        #: app/controllers/user/VerificationController.php:54
        "You are already verified" => "",

        #: app/controllers/user/VerificationController.php:75
        "You already requested a verification. As soon as we verify the document, we will let you know." => "",

        #: app/controllers/user/VerificationController.php:79
        "Please upload a document so we can verify you." => "",

        #: app/controllers/user/VerificationController.php:83
        "Please fill everything so we can verify you." => "",

        #: app/controllers/user/VerificationController.php:86
        "Document must be either a PDF or a JPG (Max 2MB)." => "",

        #: app/controllers/user/VerificationController.php:88
        "Document must be either a PDF or a JPG (Max 2MB)" => "",

        #: app/controllers/user/VerificationController.php:118
        "Thank you. We will process your document as soon as possible and verify you." => "",

        #: app/helpers/App.php:392
        "Bulk QR Codes" => "",

        #: app/helpers/App.php:393
        "Generate multiple QR codes at once." => "",

        #: app/helpers/App.php:398 storage/themes/default/index.php:412
        #: storage/themes/the23/index.php:288
        "Custom Landing Page" => "",

        #: app/helpers/App.php:399 storage/themes/default/index.php:414
        #: storage/themes/the23/index.php:290
        "Create a custom landing page to promote your product or service on forefront and engage the user in your marketing campaign." => "",

        #: app/helpers/App.php:404 storage/themes/default/index.php:429
        #: storage/themes/the23/index.php:299
        "CTA Overlays" => "",

        #: app/helpers/App.php:405 storage/themes/default/index.php:431
        #: storage/themes/the23/index.php:301
        "Use our overlay tool to display unobtrusive notifications, polls or even a contact on the target website. Great for campaigns." => "",

        #: app/helpers/App.php:411 storage/themes/default/index.php:482
        "Easily add your own domain name for short your links and take control of your brand name and your users' trust." => "",

        #: app/helpers/App.php:417 storage/themes/default/index.php:448
        #: storage/themes/the23/index.php:312
        "Add your custom pixel from providers such as Facebook and track events right when they are happening." => "",

        #: app/helpers/App.php:423
        "Group & organize your links." => "",

        #: app/helpers/App.php:430
        "Group your links and visualize aggregate data." => "",

        #: app/helpers/App.php:436 storage/themes/default/user/confirmation.php:82
        "Team Members" => "",

        #: app/helpers/App.php:437 storage/themes/default/index.php:465
        "Invite your team members and assign them specific privileges to manage links, bundles, pages and other features." => "",

        #: app/helpers/App.php:442 storage/themes/default/user/confirmation.php:71
        "Custom Aliases" => "",

        #: app/helpers/App.php:443
        "Choose a custom alias instead of a randomly generated one." => "",

        #: app/helpers/App.php:448 storage/themes/default/partials/links.php:77
        #: storage/themes/default/partials/shortener.php:121
        #: storage/themes/default/partials/shortener.php:208
        #: storage/themes/default/user/edit.php:122
        "Deep Linking" => "",

        #: app/helpers/App.php:449
        "Configure your links to automatically open apps if installed." => "",

        #: app/helpers/App.php:454 app/helpers/BioWidgets.php:768
        #: storage/themes/default/partials/shortener.php:118
        #: storage/themes/default/partials/shortener.php:169
        #: storage/themes/default/user/edit.php:52
        "Geo Targeting" => "",

        #: app/helpers/App.php:455
        "Target and redirect visitors based on their country or state." => "",

        #: app/helpers/App.php:460 storage/themes/default/partials/shortener.php:124
        #: storage/themes/default/partials/shortener.php:229
        #: storage/themes/default/user/confirmation.php:75
        #: storage/themes/default/user/edit.php:143
        "Device Targeting" => "",

        #: app/helpers/App.php:461
        "Target and redirect visitors based on their device." => "",

        #: app/helpers/App.php:466 app/helpers/BioWidgets.php:777
        #: storage/themes/default/partials/shortener.php:127
        #: storage/themes/default/partials/shortener.php:258
        #: storage/themes/default/user/confirmation.php:76
        #: storage/themes/default/user/edit.php:191
        "Language Targeting" => "",

        #: app/helpers/App.php:467
        "Target and redirect visitors based on their language." => "",

        #: app/helpers/App.php:472 storage/themes/default/partials/shortener.php:345
        "A/B Testing & Rotator" => "",

        #: app/helpers/App.php:473
        "Rotate links using the same short link. Great for A/B testing." => "",

        #: app/helpers/App.php:478 storage/themes/default/partials/links.php:83
        #: storage/themes/default/partials/shortener.php:133
        #: storage/themes/default/partials/shortener.php:303
        #: storage/themes/default/user/billing.php:63
        #: storage/themes/default/user/edit.php:239
        "Expiration" => "",

        #: app/helpers/App.php:479
        "Set a date or number to clicks to expire short links" => "",

        #: app/helpers/App.php:484
        "Click Limitation" => "",

        #: app/helpers/App.php:485
        "Limit number of clicks per short link" => "",

        #: app/helpers/App.php:490 storage/themes/default/partials/links.php:92
        #: storage/themes/default/partials/shortener.php:139
        "Parameters" => "",

        #: app/helpers/App.php:491
        "Add parameters such as UTM to the short link." => "",

        #: app/helpers/App.php:496
        "Custom Logo on QR" => "",

        #: app/helpers/App.php:497
        "Upload your own logo on QR codes." => "",

        #: app/helpers/App.php:502
        "Frames on QR" => "",

        #: app/helpers/App.php:503
        "Add frames to your QR codes." => "",

        #: app/helpers/App.php:508
        "Custom CSS on Bio Page" => "",

        #: app/helpers/App.php:509
        "Add your own CSS on Bio Pages." => "",

        #: app/helpers/App.php:514 storage/themes/default/bio/edit.php:477
        "Remove Branding" => "",

        #: app/helpers/App.php:515
        "Remove branding on Bio Pages and Custom Splash Pages" => "",

        #: app/helpers/App.php:520
        "Premium Domains" => "",

        #: app/helpers/App.php:521
        "Use premium domains we provide you with instead of the original one." => "",

        #: app/helpers/App.php:526 storage/themes/default/domains/index.php:14
        #: storage/themes/default/domains/new.php:61
        "Domains" => "",

        #: app/helpers/App.php:527
        "Enter domains to allow as entered in the settings (e.g. https://domain1.com,https://domain2.com) or leave empty to allow all domains." => "",

        #: app/helpers/App.php:532 storage/themes/default/integrations/index.php:44
        #: storage/themes/default/integrations/index.php:49
        #: storage/themes/default/layouts/dashboard.php:86
        #: storage/themes/default/partials/footer.php:76
        #: storage/themes/default/partials/main_menu.php:27
        #: storage/themes/default/partials/sidebar_menu.php:225
        #: storage/themes/default/teams/edit.php:67
        #: storage/themes/default/teams/index.php:73
        #: storage/themes/default/user/confirmation.php:96
        #: storage/themes/the23/index.php:376
        #: storage/themes/the23/partials/footer.php:75
        #: storage/themes/the23/partials/main_menu.php:134
        #: storage/themes/the23/partials/main_menu.php:213
        "Developer API" => "",

        #: app/helpers/App.php:533 storage/themes/default/index.php:499
        #: storage/themes/the23/index.php:378
        "Use our powerful API to build custom applications or extend your own application with our powerful tools." => "",

        #: app/helpers/App.php:538
        "API Rate Limit" => "",

        #: app/helpers/App.php:539
        "Amount of requests you can send per minute to our API system." => "",

        #: app/helpers/App.php:544 storage/themes/default/partials/sidebar_menu.php:222
        #: storage/themes/default/user/import.php:1
        "Import Links" => "",

        #: app/helpers/App.php:545
        "Import links via CSV." => "",

        #: app/helpers/App.php:550 storage/themes/default/teams/edit.php:70
        #: storage/themes/default/teams/index.php:76
        #: storage/themes/default/user/campaignstats.php:102
        #: storage/themes/default/user/confirmation.php:95
        #: storage/themes/default/user/stats.php:61
        "Export Data" => "",

        #: app/helpers/App.php:551
        "Export clicks & visits." => "",

        #: app/helpers/App.php:1022 app/helpers/App.php:1031
        "Redirection" => "",

        #: app/helpers/App.php:1024 storage/themes/default/pages/qr.php:270
        #: storage/themes/default/user/settings.php:87
        #: storage/themes/the23/pages/qr.php:271
        "Frame" => "",

        #: app/helpers/App.php:1025 storage/themes/default/user/settings.php:88
        "Splash" => "",

        #: app/helpers/App.php:1059
        #: storage/themes/default/partials/sidebar_menu.php:154
        #: storage/themes/default/teams/edit.php:33
        #: storage/themes/default/teams/index.php:39
        #: storage/themes/default/user/confirmation.php:79
        "Custom Splash" => "",

        #: app/helpers/BioWidgets.php:56 app/helpers/BioWidgets.php:623
        "Tagline" => "",

        #: app/helpers/BioWidgets.php:57
        "Add a tagline under your profile name" => "",

        #: app/helpers/BioWidgets.php:66
        "Heading" => "",

        #: app/helpers/BioWidgets.php:67
        "Add a heading with different sizes" => "",

        #: app/helpers/BioWidgets.php:76 app/helpers/BioWidgets.php:949
        #: app/helpers/BioWidgets.php:1163 app/helpers/BioWidgets.php:1240
        #: app/helpers/BioWidgets.php:2710 app/helpers/BioWidgets.php:2823
        #: storage/themes/default/pages/qr.php:24
        #: storage/themes/default/pages/qr.php:37 storage/themes/default/qr/bulk.php:26
        #: storage/themes/default/qr/bulk.php:327 storage/themes/default/qr/edit.php:31
        #: storage/themes/default/qr/edit.php:712 storage/themes/default/qr/new.php:26
        #: storage/themes/default/qr/new.php:47 storage/themes/default/qr/new.php:706
        #: storage/themes/the23/pages/qr.php:25 storage/themes/the23/pages/qr.php:38
        "Text" => "",

        #: app/helpers/BioWidgets.php:77
        "Add a text body to your page" => "",

        #: app/helpers/BioWidgets.php:86
        "Divider" => "",

        #: app/helpers/BioWidgets.php:87
        "Separate your content with a line" => "",

        #: app/helpers/BioWidgets.php:96 app/helpers/BioWidgets.php:1246
        #: app/helpers/BioWidgets.php:1337 app/helpers/BioWidgets.php:1347
        #: app/helpers/BioWidgets.php:1362 app/helpers/BioWidgets.php:1384
        #: app/helpers/BioWidgets.php:1406 app/helpers/BioWidgets.php:1875
        #: app/helpers/BioWidgets.php:1973 app/helpers/BioWidgets.php:2171
        #: app/helpers/BioWidgets.php:2253 app/helpers/BioWidgets.php:2333
        #: app/helpers/BioWidgets.php:2428 app/helpers/BioWidgets.php:2530
        #: app/helpers/BioWidgets.php:2544 app/helpers/BioWidgets.php:3357
        #: app/helpers/BioWidgets.php:3529 app/helpers/BioWidgets.php:3619
        #: app/helpers/BioWidgets.php:3706 app/helpers/BioWidgets.php:3788
        #: app/helpers/BioWidgets.php:3873 app/helpers/BioWidgets.php:3964
        #: app/helpers/BioWidgets.php:4076 app/helpers/BioWidgets.php:4181
        #: app/helpers/BioWidgets.php:4309 app/helpers/BioWidgets.php:4407
        #: app/helpers/BioWidgets.php:4750 storage/themes/default/bio/edit.php:191
        #: storage/themes/default/bio/edit.php:197
        #: storage/themes/default/bio/edit.php:203
        #: storage/themes/default/bio/edit.php:209
        #: storage/themes/default/bio/edit.php:215
        #: storage/themes/default/bio/edit.php:221
        #: storage/themes/default/bio/edit.php:227
        #: storage/themes/default/bio/edit.php:234
        #: storage/themes/default/bio/edit.php:241
        #: storage/themes/default/bio/edit.php:247
        #: storage/themes/default/bio/edit.php:253
        #: storage/themes/default/bio/edit.php:259
        #: storage/themes/default/bio/edit.php:265
        #: storage/themes/default/bio/edit.php:271
        #: storage/themes/default/bio/edit.php:277
        #: storage/themes/default/bio/edit.php:283
        #: storage/themes/default/overlay/create_image.php:18
        #: storage/themes/default/overlay/edit_image.php:18
        #: storage/themes/default/qr/bulk.php:29 storage/themes/default/qr/edit.php:44
        #: storage/themes/default/qr/new.php:33 storage/themes/default/qr/new.php:58
        "Link" => "",

        #: app/helpers/BioWidgets.php:97
        "Add a trackable button to a link" => "",

        #: app/helpers/BioWidgets.php:106 app/helpers/BioWidgets.php:3470
        "HTML" => "",

        #: app/helpers/BioWidgets.php:107
        "Add custom HTML code. Script codes are not accepted" => "",

        #: app/helpers/BioWidgets.php:116 app/helpers/BioWidgets.php:1222
        #: app/helpers/BioWidgets.php:1233 app/helpers/BioWidgets.php:3351
        #: storage/themes/default/bio/edit.php:320
        "Image" => "",

        #: app/helpers/BioWidgets.php:117
        "Upload an image or 2 images in a row" => "",

        #: app/helpers/BioWidgets.php:126
        "Phone Call" => "",

        #: app/helpers/BioWidgets.php:127
        "Set your phone number to call directly" => "",

        #: app/helpers/BioWidgets.php:137 storage/themes/default/pages/qr.php:30
        #: storage/themes/default/qr/edit.php:142
        #: storage/themes/default/qr/edit.php:229 storage/themes/default/qr/new.php:37
        #: storage/themes/default/qr/new.php:157 storage/themes/the23/pages/qr.php:31
        "vCard" => "",

        #: app/helpers/BioWidgets.php:138
        "Add a downloadable vCard" => "",

        #: app/helpers/BioWidgets.php:147
        "PayPal Button" => "",

        #: app/helpers/BioWidgets.php:148
        "Generate a PayPal button to accept payments" => "",

        #: app/helpers/BioWidgets.php:157
        "WhatsApp Call" => "",

        #: app/helpers/BioWidgets.php:158
        "Add button to initiate a Whatsapp call" => "",

        #: app/helpers/BioWidgets.php:167
        "WhatsApp Message" => "",

        #: app/helpers/BioWidgets.php:168
        "Add button to send a Whatsapp message" => "",

        #: app/helpers/BioWidgets.php:177
        "RSS Feed" => "",

        #: app/helpers/BioWidgets.php:178
        "Add a dynamic RSS feed widget" => "",

        #: app/helpers/BioWidgets.php:187
        #: storage/themes/default/overlay/create_newsletter.php:107
        #: storage/themes/default/overlay/edit_newsletter.php:107
        #: storage/themes/default/user/settings.php:192
        "Newsletter" => "",

        #: app/helpers/BioWidgets.php:188
        "Add a newsletter form to store emails" => "",

        #: app/helpers/BioWidgets.php:197
        "Contact Form" => "",

        #: app/helpers/BioWidgets.php:198
        "Add a contact form to receive emails" => "",

        #: app/helpers/BioWidgets.php:207
        "FAQs" => "",

        #: app/helpers/BioWidgets.php:208
        "Add a widget of questions and answers" => "",

        #: app/helpers/BioWidgets.php:217
        "Product" => "",

        #: app/helpers/BioWidgets.php:218
        "Add a widget to a product on your site" => "",

        #: app/helpers/BioWidgets.php:227
        "Youtube Video or Playlist" => "",

        #: app/helpers/BioWidgets.php:228
        "Embed a Youtube video or a playlist" => "",

        #: app/helpers/BioWidgets.php:237
        "Spotify Embed" => "",

        #: app/helpers/BioWidgets.php:238
        "Embed a Spotify music or playlist widget" => "",

        #: app/helpers/BioWidgets.php:247
        "Apple Music Embed" => "",

        #: app/helpers/BioWidgets.php:248
        "Embed an Apple music widget" => "",

        #: app/helpers/BioWidgets.php:257
        "TikTok Embed" => "",

        #: app/helpers/BioWidgets.php:258
        "Embed a tiktok video" => "",

        #: app/helpers/BioWidgets.php:267
        "OpenSea NFT" => "",

        #: app/helpers/BioWidgets.php:268
        "Embed your NFT from OpenSea" => "",

        #: app/helpers/BioWidgets.php:277
        "Embed Tweets" => "",

        #: app/helpers/BioWidgets.php:278
        "Embed your latest tweets" => "",

        #: app/helpers/BioWidgets.php:287
        "SoundCloud" => "",

        #: app/helpers/BioWidgets.php:288
        "Embed a SoundCloud track" => "",

        #: app/helpers/BioWidgets.php:297
        "Facebook Post" => "",

        #: app/helpers/BioWidgets.php:298
        "Embed a Facebook post" => "",

        #: app/helpers/BioWidgets.php:307
        "Instagram Post" => "",

        #: app/helpers/BioWidgets.php:308
        "Embed an Instagram post" => "",

        #: app/helpers/BioWidgets.php:317
        "Typeform" => "",

        #: app/helpers/BioWidgets.php:318
        "Embed a Typeform form" => "",

        #: app/helpers/BioWidgets.php:327 app/helpers/BioWidgets.php:491
        #: app/helpers/DeepLinks.php:142
        "Pinterest" => "",

        #: app/helpers/BioWidgets.php:328
        "Embed a Pinterest board" => "",

        #: app/helpers/BioWidgets.php:337
        "Reddit" => "",

        #: app/helpers/BioWidgets.php:338
        "Embed a Reddit profile" => "",

        #: app/helpers/BioWidgets.php:347
        "Calendly" => "",

        #: app/helpers/BioWidgets.php:348
        "Schedule booking & appointments" => "",

        #: app/helpers/BioWidgets.php:357 app/helpers/BioWidgets.php:459
        "Threads" => "",

        #: app/helpers/BioWidgets.php:358
        "Display a Threads post" => "",

        #: app/helpers/BioWidgets.php:367
        "TikTok Profile" => "",

        #: app/helpers/BioWidgets.php:368
        "Display your profile" => "",

        #: app/helpers/BioWidgets.php:377
        "Google Maps" => "",

        #: app/helpers/BioWidgets.php:378
        "Add a pin to your location on Google Maps" => "",

        #: app/helpers/BioWidgets.php:387
        "OpenTable Reservation" => "",

        #: app/helpers/BioWidgets.php:388
        "Allow visitors to easily book a table" => "",

        #: app/helpers/BioWidgets.php:397
        "EventBrite" => "",

        #: app/helpers/BioWidgets.php:398
        "Allow visitors to easily book an event" => "",

        #: app/helpers/BioWidgets.php:407 app/helpers/BioWidgets.php:479
        #: app/helpers/DeepLinks.php:115
        "Snapchat" => "",

        #: app/helpers/BioWidgets.php:408
        "Add a Snapchat widget on your page" => "",

        #: app/helpers/BioWidgets.php:443 app/helpers/DeepLinks.php:61
        #: storage/themes/default/pages/qr.php:148
        #: storage/themes/default/qr/edit.php:207
        #: storage/themes/default/qr/edit.php:286 storage/themes/default/qr/new.php:222
        #: storage/themes/default/qr/new.php:307 storage/themes/the23/pages/qr.php:149
        "Facebook" => "",

        #: app/helpers/BioWidgets.php:447 app/helpers/DeepLinks.php:196
        #: storage/themes/default/pages/qr.php:152
        #: storage/themes/default/qr/edit.php:211
        #: storage/themes/default/qr/edit.php:290 storage/themes/default/qr/new.php:226
        #: storage/themes/default/qr/new.php:311 storage/themes/the23/pages/qr.php:153
        "Twitter" => "",

        #: app/helpers/BioWidgets.php:451
        "X" => "",

        #: app/helpers/BioWidgets.php:455 app/helpers/DeepLinks.php:70
        #: storage/themes/default/pages/qr.php:156
        #: storage/themes/default/qr/edit.php:215
        #: storage/themes/default/qr/edit.php:294 storage/themes/default/qr/new.php:230
        #: storage/themes/default/qr/new.php:315 storage/themes/the23/pages/qr.php:157
        "Instagram" => "",

        #: app/helpers/BioWidgets.php:463 app/helpers/DeepLinks.php:106
        "TikTok" => "",

        #: app/helpers/BioWidgets.php:467
        "Linkedin" => "",

        #: app/helpers/BioWidgets.php:471 app/helpers/DeepLinks.php:43
        "Youtube" => "",

        #: app/helpers/BioWidgets.php:475 app/helpers/DeepLinks.php:133
        "Telegram" => "",

        #: app/helpers/BioWidgets.php:483
        "Discord" => "",

        #: app/helpers/BioWidgets.php:487 app/helpers/DeepLinks.php:178
        "Twitch" => "",

        #: app/helpers/BioWidgets.php:495
        "Shopify" => "",

        #: app/helpers/BioWidgets.php:499 app/helpers/DeepLinks.php:52
        "Amazon" => "",

        #: app/helpers/BioWidgets.php:503
        "Line Messenger" => "",

        #: app/helpers/BioWidgets.php:507 app/helpers/DeepLinks.php:88
        #: storage/themes/default/qr/edit.php:125 storage/themes/default/qr/new.php:40
        #: storage/themes/default/qr/new.php:142
        "Whatsapp" => "",

        #: app/helpers/BioWidgets.php:511
        "Viber" => "",

        #: app/helpers/BioWidgets.php:515 app/helpers/DeepLinks.php:79
        "Spotify" => "",

        #: app/helpers/BioWidgets.php:519
        "Github" => "",

        #: app/helpers/BioWidgets.php:523
        "Behance" => "",

        #: app/helpers/BioWidgets.php:527
        "Dribbble" => "",

        #: app/helpers/BioWidgets.php:580
        "Preview Only - The following block is hidden in live Bio Page." => "",

        #: app/helpers/BioWidgets.php:623
        "{b} Error: One or more countries are invalid." => "",

        #: app/helpers/BioWidgets.php:745 storage/themes/default/bio/edit.php:116
        "Move" => "",

        #: app/helpers/BioWidgets.php:747 app/helpers/BioWidgets.php:2971
        #: app/helpers/BioWidgets.php:2995 storage/themes/default/bio/edit.php:119
        #: storage/themes/default/bio/index.php:69
        #: storage/themes/default/domains/index.php:60
        #: storage/themes/default/overlay/index.php:47
        #: storage/themes/default/partials/links.php:35
        #: storage/themes/default/pixels/index.php:59
        #: storage/themes/default/qr/index.php:99
        #: storage/themes/default/splash/index.php:47
        #: storage/themes/default/user/campaigns.php:72
        #: storage/themes/default/user/channels.php:34
        #: storage/themes/default/user/channels.php:64
        #: storage/themes/default/user/edit.php:87
        #: storage/themes/default/user/edit.php:168
        #: storage/themes/default/user/edit.php:216
        #: storage/themes/default/user/edit.php:302
        #: storage/themes/default/user/edit.php:364
        #: storage/themes/default/user/settings.php:266
        "Delete" => "",

        #: app/helpers/BioWidgets.php:754
        "View Stats" => "",

        #: app/helpers/BioWidgets.php:757
        "Toggle Block" => "",

        #: app/helpers/BioWidgets.php:765 storage/themes/the23/pages/bio.php:84
        "Advanced Settings" => "",

        #: app/helpers/BioWidgets.php:769
        "Display this block for specific countries" => "",

        #: app/helpers/BioWidgets.php:778
        "Display this block for specific languages" => "",

        #: app/helpers/BioWidgets.php:786
        "Schedule" => "",

        #: app/helpers/BioWidgets.php:787
        "Schedule when this blocks goes live and ends" => "",

        #: app/helpers/BioWidgets.php:790 storage/themes/default/pages/qr.php:206
        #: storage/themes/default/qr/edit.php:396 storage/themes/default/qr/new.php:371
        #: storage/themes/the23/pages/qr.php:207
        "Start" => "",

        #: app/helpers/BioWidgets.php:794 storage/themes/default/pages/qr.php:212
        #: storage/themes/default/qr/edit.php:402 storage/themes/default/qr/new.php:377
        #: storage/themes/the23/pages/qr.php:213
        "End" => "",

        #: app/helpers/BioWidgets.php:801
        "Gate Access" => "",

        #: app/helpers/BioWidgets.php:802
        "Visitors can be gated before accessing the link. Please note that you can only activate one at a time." => "",

        #: app/helpers/BioWidgets.php:806
        "Visitors must acknowledge that the link may contain sensitive content" => "",

        #: app/helpers/BioWidgets.php:813
        #: storage/themes/default/overlay/create_coupon.php:26
        #: storage/themes/default/overlay/create_message.php:27
        #: storage/themes/default/overlay/edit_coupon.php:26
        #: storage/themes/default/overlay/edit_message.php:27
        #: storage/themes/default/splash/create.php:54
        #: storage/themes/default/splash/edit.php:60
        "Custom Message" => "",

        #: app/helpers/BioWidgets.php:818 app/helpers/BioWidgets.php:1588
        #: app/helpers/BioWidgets.php:2779 app/helpers/BioWidgets.php:2788
        #: storage/themes/default/overlay/create_newsletter.php:54
        #: storage/themes/default/overlay/create_newsletter.php:114
        #: storage/themes/the23/pages/bio.php:116
        #: storage/themes/the23/pages/bio.php:129
        "Subscribe" => "",

        #: app/helpers/BioWidgets.php:819
        "Visitors must subscribe before being redirected" => "",

        #: app/helpers/BioWidgets.php:827
        "Save Changes" => "",

        #: app/helpers/BioWidgets.php:848
        "You already have a tagline widget." => "",

        #: app/helpers/BioWidgets.php:936 app/helpers/BioWidgets.php:1039
        "Style" => "",

        #: app/helpers/BioWidgets.php:955 app/helpers/BioWidgets.php:1052
        "Color" => "",

        #: app/helpers/BioWidgets.php:1041
        "Solid" => "",

        #: app/helpers/BioWidgets.php:1042
        "Dotted" => "",

        #: app/helpers/BioWidgets.php:1043
        "Dashed" => "",

        #: app/helpers/BioWidgets.php:1044
        "Double" => "",

        #: app/helpers/BioWidgets.php:1048
        "Height" => "",

        #: app/helpers/BioWidgets.php:1163 app/helpers/BioWidgets.php:1755
        "{b} Error: Text is too long." => "",

        #: app/helpers/BioWidgets.php:1218
        "Icon" => "",

        #: app/helpers/BioWidgets.php:1220
        "None " => "",

        #: app/helpers/BioWidgets.php:1221
        "Icon/Emoji" => "",

        #: app/helpers/BioWidgets.php:1249
        "New window" => "",

        #: app/helpers/BioWidgets.php:1258
        "Animation" => "",

        #: app/helpers/BioWidgets.php:1260 storage/themes/default/bio/edit.php:371
        #: storage/themes/default/bio/edit.php:381
        #: storage/themes/default/domains/index.php:48
        #: storage/themes/default/domains/index.php:51
        #: storage/themes/default/partials/shortener.php:81
        #: storage/themes/default/partials/shortenermodal.php:78
        #: storage/themes/default/user/edit.php:473
        #: storage/themes/default/user/index.php:284
        #: storage/themes/default/user/links.php:233
        "None" => "",

        #: app/helpers/BioWidgets.php:1261
        "Shake" => "",

        #: app/helpers/BioWidgets.php:1262
        "Scale" => "",

        #: app/helpers/BioWidgets.php:1263
        "Jello" => "",

        #: app/helpers/BioWidgets.php:1264
        "Vibrate" => "",

        #: app/helpers/BioWidgets.php:1265
        "Wobble" => "",

        #: app/helpers/BioWidgets.php:1296 storage/themes/default/bio/edit.php:107
        #: storage/themes/default/bio/edit.php:124
        "Please enter a valid link" => "",

        #: app/helpers/BioWidgets.php:1337
        "{b} Error: You can either Sensitive Content or Subscribe gate but not both." => "",

        #: app/helpers/BioWidgets.php:1347
        "{b} Error: Please enter a valid URL." => "",

        #: app/helpers/BioWidgets.php:1362 app/helpers/BioWidgets.php:1384
        #: app/helpers/BioWidgets.php:1406
        "{b} Error: This link cannot be accepted because either it is invalid or it might not be safe." => "",

        #: app/helpers/BioWidgets.php:1435
        "Image must be either a GIF, PNG or a JPEG (Max {s}kb)." => "",

        #: app/helpers/BioWidgets.php:1548
        "This link may contain inappropriate content not suitable for all ages." => "",

        #: app/helpers/BioWidgets.php:1578
        "Subscribe to unlock" => "",

        #: app/helpers/BioWidgets.php:1584 app/helpers/BioWidgets.php:2118
        #: app/helpers/BioWidgets.php:2854 storage/themes/the23/pages/contact.php:52
        #: storage/themes/the23/pages/report.php:14
        "Please enter a valid email" => "",

        #: app/helpers/BioWidgets.php:1591
        "By subscribing, I agree to the terms and conditions and privacy policy." => "",

        #: app/helpers/BioWidgets.php:1645 app/helpers/BioWidgets.php:1720
        #: app/helpers/BioWidgets.php:1804 app/helpers/BioWidgets.php:3140
        #: storage/themes/default/pages/qr.php:101
        #: storage/themes/default/qr/edit.php:78 storage/themes/default/qr/edit.php:158
        #: storage/themes/default/qr/edit.php:245 storage/themes/default/qr/new.php:35
        #: storage/themes/default/qr/new.php:88 storage/themes/default/qr/new.php:173
        #: storage/themes/default/qr/new.php:258 storage/themes/the23/pages/qr.php:102
        "Phone" => "",

        #: app/helpers/BioWidgets.php:1651 app/helpers/BioWidgets.php:1726
        #: app/helpers/BioWidgets.php:1810 app/helpers/BioWidgets.php:2066
        #: app/helpers/BioWidgets.php:3204 app/helpers/BioWidgets.php:3958
        #: app/helpers/BioWidgets.php:4070 app/helpers/BioWidgets.php:4175
        #: app/helpers/BioWidgets.php:4303 app/helpers/BioWidgets.php:4659
        "Label" => "",

        #: app/helpers/BioWidgets.php:1755
        "Whatsapp Message" => "",

        #: app/helpers/BioWidgets.php:1877
        "You can add a link to a spotify song, a playlist or a podcast." => "",

        #: app/helpers/BioWidgets.php:1887 app/helpers/BioWidgets.php:1915
        "Please enter a valid Spotify track, playlist or podcast link" => "",

        #: app/helpers/BioWidgets.php:1984 app/helpers/BioWidgets.php:2012
        "Please enter a valid Apple Music link" => "",

        #: app/helpers/BioWidgets.php:2080 app/helpers/BioWidgets.php:3343
        #: storage/themes/default/invoice.php:74
        #: storage/themes/default/user/billing.php:36
        "Amount" => "",

        #: app/helpers/BioWidgets.php:2086
        "Currency" => "",

        #: app/helpers/BioWidgets.php:2182 app/helpers/BioWidgets.php:2210
        "Please enter a valid TikTok video link" => "",

        #: app/helpers/BioWidgets.php:2264 app/helpers/BioWidgets.php:2292
        "Please enter a valid TikTok profile link" => "",

        #: app/helpers/BioWidgets.php:2335
        "You can add a link to a video or a playlist." => "",

        #: app/helpers/BioWidgets.php:2345 app/helpers/BioWidgets.php:2373
        "Please enter a valid Youtube video or playlist link" => "",

        #: app/helpers/BioWidgets.php:2439 app/helpers/BioWidgets.php:2466
        #: app/helpers/BioWidgets.php:2468
        "Please enter a valid RSS Feed link" => "",

        #: app/helpers/BioWidgets.php:2536 app/helpers/BioWidgets.php:2550
        #: storage/themes/default/qr/edit.php:366 storage/themes/default/qr/new.php:39
        #: storage/themes/default/qr/new.php:134
        "File" => "",

        #: app/helpers/BioWidgets.php:2536 app/helpers/BioWidgets.php:2550
        #: storage/themes/default/class/themeSettings.php:169
        #: storage/themes/default/class/themeSettings.php:192
        #: storage/themes/default/teams/index.php:115
        #: storage/themes/the23/class/themeSettings.php:210
        #: storage/themes/the23/class/themeSettings.php:233
        "Remove" => "",

        #: app/helpers/BioWidgets.php:2591 app/helpers/BioWidgets.php:2611
        #: app/helpers/BioWidgets.php:3387
        "Image must be either a PNG or a JPEG (Max {s}kb)." => "",

        #: app/helpers/BioWidgets.php:2904
        "Message sent successfully." => "",

        #: app/helpers/BioWidgets.php:2936
        #: storage/themes/default/overlay/create_contact.php:83
        #: storage/themes/default/overlay/create_contact.php:169
        #: storage/themes/default/pages/contact.php:35
        #: storage/themes/default/pages/report.php:40
        #: storage/themes/the23/pages/contact.php:64
        #: storage/themes/the23/pages/report.php:33
        "Send" => "",

        #: app/helpers/BioWidgets.php:2969 app/helpers/BioWidgets.php:2993
        #: storage/themes/default/overlay/create_poll.php:20
        #: storage/themes/default/overlay/edit_poll.php:20
        "Question" => "",

        #: app/helpers/BioWidgets.php:2976 app/helpers/BioWidgets.php:3000
        "Answer" => "",

        #: app/helpers/BioWidgets.php:2983
        "Add FAQ" => "",

        #: app/helpers/BioWidgets.php:3120 storage/themes/default/pages/qr.php:89
        #: storage/themes/default/qr/edit.php:146
        #: storage/themes/default/qr/edit.php:233 storage/themes/default/qr/new.php:161
        #: storage/themes/default/qr/new.php:246 storage/themes/the23/pages/qr.php:90
        "First Name" => "",

        #: app/helpers/BioWidgets.php:3126 storage/themes/default/pages/qr.php:93
        #: storage/themes/default/qr/edit.php:150
        #: storage/themes/default/qr/edit.php:237 storage/themes/default/qr/new.php:165
        #: storage/themes/default/qr/new.php:250 storage/themes/the23/pages/qr.php:94
        "Last Name" => "",

        #: app/helpers/BioWidgets.php:3148
        "Cellphone" => "",

        #: app/helpers/BioWidgets.php:3154 storage/themes/default/pages/qr.php:109
        #: storage/themes/default/qr/edit.php:166 storage/themes/default/qr/new.php:181
        #: storage/themes/default/qr/new.php:266 storage/themes/the23/pages/qr.php:110
        "Fax" => "",

        #: app/helpers/BioWidgets.php:3162
        #: storage/themes/default/partials/footer.php:67
        #: storage/themes/default/pricing/checkout.php:46
        #: storage/themes/the23/pricing/checkout.php:52
        "Company" => "",

        #: app/helpers/BioWidgets.php:3168
        "Site" => "",

        #: app/helpers/BioWidgets.php:3176 app/helpers/BioWidgets.php:4488
        #: storage/themes/default/pages/qr.php:121
        #: storage/themes/default/pricing/checkout.php:64
        #: storage/themes/default/qr/edit.php:178
        #: storage/themes/default/qr/edit.php:257 storage/themes/default/qr/new.php:193
        #: storage/themes/default/qr/new.php:278
        #: storage/themes/default/user/settings.php:128
        #: storage/themes/default/user/verification.php:40
        #: storage/themes/the23/pages/qr.php:122
        #: storage/themes/the23/pricing/checkout.php:69
        "Address" => "",

        #: app/helpers/BioWidgets.php:3182 storage/themes/default/pages/qr.php:130
        #: storage/themes/default/pricing/checkout.php:70
        #: storage/themes/default/qr/edit.php:188
        #: storage/themes/default/qr/edit.php:267 storage/themes/default/qr/new.php:203
        #: storage/themes/default/qr/new.php:288
        #: storage/themes/default/user/settings.php:134
        #: storage/themes/default/user/verification.php:46
        #: storage/themes/the23/pages/qr.php:131
        #: storage/themes/the23/pricing/checkout.php:75
        "City" => "",

        #: app/helpers/BioWidgets.php:3190
        "Zip" => "",

        #: app/helpers/BioWidgets.php:3196 storage/themes/default/pages/qr.php:142
        #: storage/themes/default/pricing/checkout.php:84
        #: storage/themes/default/qr/edit.php:200
        #: storage/themes/default/qr/edit.php:279 storage/themes/default/qr/new.php:215
        #: storage/themes/default/qr/new.php:300
        #: storage/themes/default/stats/activity.php:15
        #: storage/themes/default/user/activity.php:7
        #: storage/themes/default/user/settings.php:148
        #: storage/themes/default/user/verification.php:60
        #: storage/themes/the23/pages/qr.php:143
        #: storage/themes/the23/pricing/checkout.php:89
        "Country" => "",

        #: app/helpers/BioWidgets.php:3294
        "Download vCard" => "",

        #: app/helpers/BioWidgets.php:3337 storage/themes/default/invoice.php:72
        #: storage/themes/default/overlay/create_coupon.php:87
        #: storage/themes/default/overlay/create_newsletter.php:108
        #: storage/themes/default/overlay/edit_newsletter.php:108
        #: storage/themes/default/pages/api.php:179
        #: storage/themes/default/pages/qr.php:192
        #: storage/themes/default/partials/shortener.php:104
        #: storage/themes/default/partials/shortenermodal.php:101
        #: storage/themes/default/qr/edit.php:382 storage/themes/default/qr/new.php:357
        #: storage/themes/default/user/channel.php:94
        #: storage/themes/default/user/channels.php:94
        #: storage/themes/default/user/channels.php:136
        #: storage/themes/default/user/edit.php:464
        #: storage/themes/the23/pages/api.php:174 storage/themes/the23/pages/qr.php:193
        "Description" => "",

        #: app/helpers/BioWidgets.php:3540 app/helpers/BioWidgets.php:3568
        "Please enter a valid OpenSea NFT link" => "",

        #: app/helpers/BioWidgets.php:3631 app/helpers/BioWidgets.php:3661
        "Please enter a valid Tweet link" => "",

        #: app/helpers/BioWidgets.php:3717 app/helpers/BioWidgets.php:3745
        "Please enter a valid SoundCloud link" => "",

        #: app/helpers/BioWidgets.php:3799 app/helpers/BioWidgets.php:3827
        "Please enter a valid Facebook Post link" => "",

        #: app/helpers/BioWidgets.php:3884 app/helpers/BioWidgets.php:3912
        "Please enter a valid Instagram Post link" => "",

        #: app/helpers/BioWidgets.php:3976 app/helpers/BioWidgets.php:4004
        "Please enter a valid Typeform link" => "",

        #: app/helpers/BioWidgets.php:4035
        "Open in a new tab" => "",

        #: app/helpers/BioWidgets.php:4088 app/helpers/BioWidgets.php:4117
        "Please enter a valid Pinterest link" => "",

        #: app/helpers/BioWidgets.php:4193 app/helpers/BioWidgets.php:4222
        "Please enter a valid Reddit link" => "",

        #: app/helpers/BioWidgets.php:4260
        "Karma" => "",

        #: app/helpers/BioWidgets.php:4261
        "Member since" => "",

        #: app/helpers/BioWidgets.php:4263
        "Visit Profile" => "",

        #: app/helpers/BioWidgets.php:4321 app/helpers/BioWidgets.php:4350
        "Please enter a valid Calendly link" => "",

        #: app/helpers/BioWidgets.php:4418 app/helpers/BioWidgets.php:4446
        "Please enter a valid Threads post link" => "",

        #: app/helpers/BioWidgets.php:4561
        "Restaurant ID" => "",

        #: app/helpers/BioWidgets.php:4567 storage/themes/default/stats/activity.php:24
        #: storage/themes/default/user/activity.php:16
        "Language" => "",

        #: app/helpers/BioWidgets.php:4581
        "Please enter a valid OpenTable restaurant ID" => "",

        #: app/helpers/BioWidgets.php:4606 app/helpers/BioWidgets.php:4696
        "{b} Error: Please enter a valid ID" => "",

        #: app/helpers/BioWidgets.php:4653
        "Event ID" => "",

        #: app/helpers/BioWidgets.php:4671
        "Please enter a valid EventBrite ID" => "",

        #: app/helpers/BioWidgets.php:4713
        "Book now" => "",

        #: app/helpers/BioWidgets.php:4752
        "Insert a link to a Snapchat Spotlight, Profile or Lens." => "",

        #: app/helpers/BioWidgets.php:4762 app/helpers/BioWidgets.php:4790
        "Please enter a valid Snapchat post link" => "",

        #: app/helpers/Captcha.php:138 app/helpers/Captcha.php:147
        #: app/helpers/Captcha.php:217 app/helpers/Captcha.php:225
        #: app/helpers/Captcha.php:256 app/helpers/Captcha.php:264
        "The captcha did not validate. Please try again." => "",

        #: app/helpers/DeepLinks.php:97
        "Messenger" => "",

        #: app/helpers/DeepLinks.php:124
        "Apple Music" => "",

        #: app/helpers/DeepLinks.php:151
        "LinkedIn" => "",

        #: app/helpers/DeepLinks.php:160
        "Walmart" => "",

        #: app/helpers/DeepLinks.php:169
        "Netflix" => "",

        #: app/helpers/DeepLinks.php:187
        "Zoom" => "",

        #: app/helpers/Emails.php:106
        "Please verify and approve this url" => "",

        #: app/helpers/Emails.php:148
        "Please verify your email" => "",

        #: app/helpers/Emails.php:191
        "Registration has been successful" => "",

        #: app/helpers/Emails.php:234
        "Password Reset Instructions" => "",

        #: app/helpers/Emails.php:274
        "Your email has been verified" => "",

        #: app/helpers/Emails.php:298
        "Your password was changed." => "",

        #: app/helpers/Emails.php:305
        "Your password was changed. If you did not change your password, please contact us as soon as possible." => "",

        #: app/helpers/Emails.php:323
        "You just got paid!" => "",

        #: app/helpers/Emails.php:330
        "You just got paid {amount} via PayPal for being an awesome affiliate!" => "",

        #: app/helpers/Emails.php:363
        "You have been invited to join our team" => "",

        #: app/helpers/Emails.php:389
        "Your subscription has been canceled because we have not received any payments on the due date. This might be because your credit card was declined or there is an issue with your account.</p><p>If you would like to reactivate your subscription, please contact us." => "",

        #: app/helpers/Emails.php:393
        "Your subscription has been canceled" => "",

        #: app/helpers/Emails.php:425
        "Your trial will end soon!" => "",

        #: app/helpers/Emails.php:453
        "Admin notification" => "",

        #: app/helpers/Emails.php:495
        "Please verify your email to reset your 2FA" => "",

        #: app/helpers/Emails.php:542
        "A new login has been made from a new device" => "",

        #: app/helpers/Gate.php:44
        "Inactive Link" => "",

        #: app/helpers/Gate.php:59
        "Unsafe Link Detected" => "",

        #: app/helpers/Gate.php:75
        "Link Expired" => "",

        #: app/helpers/Gate.php:88
        "Enter your password to unlock this link" => "",

        #: app/helpers/Gate.php:89
        "The access to this link is restricted. Please enter your password to view it." => "",

        #: app/helpers/Gate.php:98 app/helpers/Gate.php:223 app/helpers/Gate.php:367
        "Adblock Detected" => "",

        #: app/helpers/Gate.php:98 app/helpers/Gate.php:223 app/helpers/Gate.php:367
        "Please disable Adblock and refresh the page again." => "",

        #: app/helpers/Gate.php:212 app/helpers/Gate.php:214
        "seconds" => "",

        #: app/helpers/Gate.php:559 storage/themes/default/user/campaigns.php:31
        #: storage/themes/the23/class/themeSettings.php:175
        #: storage/themes/the23/class/themeSettings.php:184
        "List" => "",

        #: app/helpers/QR.php:80
        "An error internal server error ocurred. Please change the QR type." => "",

        #: app/helpers/QR.php:117 app/helpers/QR.php:130
        "QR data cannot be empty. Please fill the appropriate field." => "",

        #: app/helpers/QR.php:118 app/helpers/QR.php:132 app/helpers/QR.php:161
        #: app/helpers/QR.php:198 app/helpers/QR.php:218 app/helpers/QR.php:239
        "Text is too long." => "",

        #: app/helpers/QR.php:131
        "Please enter a valid url." => "",

        #: app/helpers/QR.php:155
        "Subject is too long." => "",

        #: app/helpers/QR.php:178 app/helpers/QR.php:180 app/helpers/QR.php:196
        #: app/helpers/QR.php:214 app/helpers/QR.php:237
        "Invalid phone number. Please try again." => "",

        #: app/helpers/QR.php:307 app/helpers/QR.php:380
        "vCard data cannot be empty. Please fill some fields" => "",

        #: app/helpers/QR.php:426
        "Please enter the Wifi SSID" => "",

        #: app/helpers/QR.php:471 app/helpers/QR.php:478 app/helpers/QR.php:486
        "Please enter a valid wallet address" => "",

        #: app/helpers/QR.php:503
        "Please choose a valid file." => "",

        #: app/helpers/QR.php:505 app/helpers/QR.php:507
        "File must be either a PNG, JPEG, GIF or a PDF (Max 2MB)" => "",

        #: app/helpers/QR.php:579
        "Event data cannot be empty. Please fill some fields" => "",

        #: app/helpers/QR.php:596
        "You must add at least 1 link." => "",

        #: app/helpers/QR.php:602
        "The link to redirect other devices is required." => "",

        #: app/helpers/QrImagick.php:470
        "An error occurred" => "",

        #: app/helpers/Slack.php:108
        "You need to allow this application to install the commands on your Slack account." => "",

        #: app/helpers/payments/Bank.php:48 app/traits/Payments.php:150
        #: app/traits/Payments.php:151
        "Bank Transfer" => "",

        #: app/helpers/payments/Bank.php:51 app/helpers/payments/Paddle.php:67
        #: app/helpers/payments/PayStack.php:62 app/helpers/payments/Paypal.php:53
        #: app/helpers/payments/PaypalApi.php:55 app/helpers/payments/Stripe.php:56
        #: storage/themes/default/teams/index.php:107
        "Enable" => "",

        #: app/helpers/payments/Bank.php:53
        "Transfer payments via your bank." => "",

        #: app/helpers/payments/Bank.php:56
        "Bank Info" => "",

        #: app/helpers/payments/Bank.php:58
        "Enter the full information where your users can send payments to via their bank." => "",

        #: app/helpers/payments/Bank.php:80
        "Bank Information" => "",

        #: app/helpers/payments/Bank.php:82
        "Transfer Reference" => "",

        #: app/helpers/payments/Bank.php:83
        "Please use the following reference: {u}" => "",

        #: app/helpers/payments/Bank.php:99 app/helpers/payments/Bank.php:104
        #: app/helpers/payments/Paypal.php:95 app/helpers/payments/Paypal.php:99
        #: app/helpers/payments/PaypalApi.php:102
        #: app/helpers/payments/PaypalApi.php:106 app/helpers/payments/Stripe.php:201
        #: app/helpers/payments/Stripe.php:205 app/helpers/payments/Stripe.php:237
        #: app/helpers/payments/Stripe.php:279 app/helpers/payments/Stripe.php:282
        #: app/helpers/payments/Stripe.php:315 app/helpers/payments/Stripe.php:386
        #: app/helpers/payments/Stripe.php:405 app/helpers/payments/Stripe.php:438
        #: app/helpers/payments/Stripe.php:510 app/helpers/payments/Stripe.php:1108
        #: app/helpers/payments/Stripe.php:1111 app/helpers/payments/Stripe.php:1199
        "An error ocurred, please try again. You have not been charged." => "",

        #: app/helpers/payments/Bank.php:108 app/helpers/payments/Stripe.php:213
        #: app/helpers/payments/Stripe.php:1071
        "First month" => "",

        #: app/helpers/payments/Bank.php:114 app/helpers/payments/Stripe.php:219
        #: app/helpers/payments/Stripe.php:1077
        "First year" => "",

        #: app/helpers/payments/Bank.php:121 app/helpers/payments/Paddle.php:200
        #: app/helpers/payments/PayStack.php:149 app/helpers/payments/Stripe.php:226
        #: app/helpers/payments/Stripe.php:1084
        #: storage/themes/default/pricing/index.php:18
        #: storage/themes/the23/pricing/checkout.php:111
        #: storage/themes/the23/pricing/index.php:20
        "Lifetime" => "",

        #: app/helpers/payments/Bank.php:195
        "Your subscription is currently pending. Once we receive the money, we will activate your subscription." => "",

        #: app/helpers/payments/Paddle.php:64
        "Paddle Payments" => "",

        #: app/helpers/payments/Paddle.php:69
        "Collect payments securely with Paddle." => "",

        #: app/helpers/payments/Paddle.php:73
        "Paddle Vendor ID " => "",

        #: app/helpers/payments/Paddle.php:75
        "Get your vendor id from here once logged in <a href=\"https://vendors.paddle.com/authentication\" target=\"_blank\">click here</a>" => "",

        #: app/helpers/payments/Paddle.php:78
        "Paddle API Key" => "",

        #: app/helpers/payments/Paddle.php:80
        "Get your paddle keys from here once logged in <a href=\"https://vendors.paddle.com/authentication\" target=\"_blank\">click here</a>" => "",

        #: app/helpers/payments/Paddle.php:83
        "Paddle Public Key" => "",

        #: app/helpers/payments/Paddle.php:85
        "Get your paddle public key from here once logged in <a href=\"https://vendors.paddle.com/public-key\" target=\"_blank\">click here</a>" => "",

        #: app/helpers/payments/Paddle.php:88 app/helpers/payments/PayStack.php:78
        #: app/helpers/payments/Stripe.php:93
        "Webhook URL" => "",

        #: app/helpers/payments/Paddle.php:90
        "You can add your webhooks <a href=\"https://vendors.paddle.com/alerts-webhooks\" target=\"_blank\">here</a>. For more info, please check the docs." => "",

        #: app/helpers/payments/Paddle.php:93
        "Monthly Plan ID" => "",

        #: app/helpers/payments/Paddle.php:95
        "You need to create a single monthly plan manually and insert the plan ID here. View documentation for more information." => "",

        #: app/helpers/payments/Paddle.php:98
        "Yearly Plan ID" => "",

        #: app/helpers/payments/Paddle.php:100
        "You need to create a single yearly plan manually and insert the plan ID here. View documentation for more information." => "",

        #: app/helpers/payments/Paddle.php:106
        "You cannot enable both Stripe and Paddle at the same time because they both work in the same way. You must choose one." => "",

        #: app/helpers/payments/Paddle.php:178 app/helpers/payments/Paddle.php:182
        #: app/helpers/payments/Paddle.php:291 app/helpers/payments/PayStack.php:123
        #: app/helpers/payments/PayStack.php:127 app/helpers/payments/PayStack.php:280
        #: app/helpers/payments/PayStack.php:296 app/helpers/payments/PayStack.php:411
        "An error occurred, please try again. You have not been charged." => "",

        #: app/helpers/payments/Paddle.php:188 app/helpers/payments/PayStack.php:135
        #: storage/themes/default/pricing/index.php:21
        #: storage/themes/the23/pricing/checkout.php:116
        #: storage/themes/the23/pricing/index.php:23
        "Monthly" => "",

        #: app/helpers/payments/Paddle.php:194 app/helpers/payments/PayStack.php:142
        #: storage/themes/default/pricing/index.php:25
        #: storage/themes/the23/pricing/checkout.php:121
        #: storage/themes/the23/pricing/index.php:27
        "Yearly" => "",

        #: app/helpers/payments/Paddle.php:370 app/helpers/payments/PayStack.php:338
        #: app/helpers/payments/Stripe.php:548 app/helpers/payments/Stripe.php:737
        "You have a new Subscriber" => "",

        #: app/helpers/payments/Paddle.php:543 app/helpers/payments/PayStack.php:540
        #: app/helpers/payments/Paypal.php:145 app/helpers/payments/Paypal.php:293
        #: app/helpers/payments/PaypalApi.php:410
        "Your payment has been canceled." => "",

        #: app/helpers/payments/PayStack.php:59
        "PayStack Payments" => "",

        #: app/helpers/payments/PayStack.php:64
        "Collect payments securely with PayStack." => "",

        #: app/helpers/payments/PayStack.php:68 storage/themes/default/auth/2fa.php:58
        #: storage/themes/default/user/security.php:84
        #: storage/themes/default/user/security.php:114
        #: storage/themes/default/user/settings.php:218
        #: storage/themes/default/user/settings.php:308
        #: storage/themes/the23/auth/2fa.php:57
        "Secret Key" => "",

        #: app/helpers/payments/PayStack.php:70 app/helpers/payments/PayStack.php:75
        "Get your paystack keys from here once logged in <a href=\"https://dashboard.paystack.com/#/settings/developers\" target=\"_blank\">click here</a>" => "",

        #: app/helpers/payments/PayStack.php:73
        "Public Key" => "",

        #: app/helpers/payments/PayStack.php:80
        "You can add your webhooks <a href=\"https://dashboard.paystack.com/#/settings/developers\" target=\"_blank\">here</a>. For more info, please check the docs." => "",

        #: app/helpers/payments/PayStack.php:86
        "You cannot enable both Stripe and PayStack at the same time because they both work in the same way. You must choose one." => "",

        #: app/helpers/payments/PayStack.php:535
        "Your payment has been confirmed and your subscription has been activated." => "",

        #: app/helpers/payments/Paypal.php:50
        "Paypal Basic Checkout" => "",

        #: app/helpers/payments/Paypal.php:55
        "Collect payments via basic paypal checkout." => "",

        #: app/helpers/payments/Paypal.php:59
        #: storage/themes/default/user/affiliate.php:85
        "PayPal Email" => "",

        #: app/helpers/payments/Paypal.php:61
        "Payments will be sent to this address. Please make sure that you enable IPN and enable notification." => "",

        #: app/helpers/payments/Paypal.php:64
        "PayPal IPN" => "",

        #: app/helpers/payments/Paypal.php:66
        "For more info <a href=\"https://developer.paypal.com/api/nvp-soap/ipn/IPNSetup/\" target=\"_blank\">click here</a>" => "",

        #: app/helpers/payments/Paypal.php:154
        "Payment complete. We will upgrade your account as soon as the payment is verified." => "",

        #: app/helpers/payments/PaypalApi.php:52
        "Paypal API Payments" => "",

        #: app/helpers/payments/PaypalApi.php:57
        "Collect payments securely with PayPal API." => "",

        #: app/helpers/payments/PaypalApi.php:61
        "Client ID" => "",

        #: app/helpers/payments/PaypalApi.php:63
        "Please enter your live client ID." => "",

        #: app/helpers/payments/PaypalApi.php:66
        "Client Secret Key" => "",

        #: app/helpers/payments/PaypalApi.php:68
        "Please enter your live client secret." => "",

        #: app/helpers/payments/PaypalApi.php:74
        "You cannot enable both basic paypal and paypal api at the same time. You must choose one." => "",

        #: app/helpers/payments/PaypalApi.php:184
        #: app/helpers/payments/PaypalApi.php:242
        #: app/helpers/payments/PaypalApi.php:245
        #: app/helpers/payments/PaypalApi.php:341
        #: app/helpers/payments/PaypalApi.php:344
        #: app/helpers/payments/PaypalApi.php:358
        #: app/helpers/payments/PaypalApi.php:362
        #: app/helpers/payments/PaypalApi.php:404
        #: app/helpers/payments/PaypalApi.php:407
        "An issue occurred. You have not been charged." => "",

        #: app/helpers/payments/PaypalApi.php:300
        "An issue occurred. Please contact us for more info." => "",

        #: app/helpers/payments/Stripe.php:53
        "Stripe Payments" => "",

        #: app/helpers/payments/Stripe.php:58
        "Collect payments securely with Stripe." => "",

        #: app/helpers/payments/Stripe.php:62
        #: storage/themes/default/pricing/checkout.php:169
        #: storage/themes/the23/pricing/checkout.php:3
        #: storage/themes/the23/pricing/checkout.php:191
        "Checkout" => "",

        #: app/helpers/payments/Stripe.php:66
        "Built-in Checkout" => "",

        #: app/helpers/payments/Stripe.php:72
        "Stripe Hosted Checkout" => "",

        #: app/helpers/payments/Stripe.php:75
        "Choose between built-in checkout or Stripe hosted checkout." => "",

        #: app/helpers/payments/Stripe.php:78
        "Stripe Publishable Key" => "",

        #: app/helpers/payments/Stripe.php:80 app/helpers/payments/Stripe.php:85
        "Get your stripe keys from here once logged in <a href=\"https://dashboard.stripe.com/account/apikeys\" target=\"_blank\">click here</a>" => "",

        #: app/helpers/payments/Stripe.php:83
        "Stripe Secret Key" => "",

        #: app/helpers/payments/Stripe.php:88
        "Webhook Signature Key" => "",

        #: app/helpers/payments/Stripe.php:90
        "Webhook signature is a security measure to verify the authenticity of the data incoming from Stripe. It is highly recommended that you add this for safety measure. You can find your key after adding a webhook. <a href=\"https://dashboard.stripe.com/account/webhooks\" target=\"_blank\">Click here to find your signature key.</a>" => "",

        #: app/helpers/payments/Stripe.php:95
        "You can add your webhooks <a href=\"https://dashboard.stripe.com/account/webhooks\" target=\"_blank\">here</a>. For more info, please check the docs." => "",

        #: app/helpers/payments/Stripe.php:174
        "Credit or debit card" => "",

        #: app/helpers/payments/Stripe.php:179
        "Payments are secure and encrypted" => "",

        #: app/helpers/payments/Stripe.php:209
        "Please enter your company name" => "",

        #: app/helpers/payments/Stripe.php:261 app/helpers/payments/Stripe.php:294
        #: storage/themes/default/pricing/checkout.php:52
        #: storage/themes/default/user/settings.php:122
        "Tax ID" => "",

        #: app/helpers/payments/Stripe.php:265 app/helpers/payments/Stripe.php:298
        "Contact Person" => "",

        #: app/helpers/payments/Stripe.php:424 app/helpers/payments/Stripe.php:486
        "Your payment was not completed because it requires authentication. Please authenticate and confirm your payment in the popup window. If you do not see the popup, enable popup in your browser and refresh the page. Once you are done and your payment is confirmed, you can close the popup and visit the dashboard." => "",

        #: app/helpers/payments/Stripe.php:466
        "Your credit card was declined. Please check your credit card and try again later." => "",

        #: app/helpers/payments/Stripe.php:495
        "Your payment was not completed. You will need to retry and complete the payment on our payment processors website." => "",

        #: app/helpers/payments/Stripe.php:698
        "Payment failed" => "",

        #: app/middleware/CheckDomain.php:79
        "Great! Your domain is working." => "",

        #: app/middleware/CheckMaintenance.php:37
        "Offline for Maintenance" => "",

        #: app/middleware/CheckPrivate.php:43
        "Private Use" => "",

        #: app/models/Plans.php:45
        "This feature is currently unavailable. Please contact your team administrator." => "",

        #: app/traits/Links.php:75
        "Please create a free account or login to shorten links." => "",

        #: app/traits/Links.php:78
        "You cannot shorten URLs at the moment. Please upgrade to another plan." => "",

        #: app/traits/Links.php:89
        "You have reached your monthly limit. Please upgrade to another plan." => "",

        #: app/traits/Links.php:92
        "You have reached your maximum links limit. Please upgrade to another plan." => "",

        #: app/traits/Links.php:98
        "This service is meant to be used internally only." => "",

        #: app/traits/Links.php:104 app/traits/Links.php:539
        "You cannot shorten URLs of this website." => "",

        #: app/traits/Links.php:107 app/traits/Links.php:542
        "This domain name or link has been blacklisted." => "",

        #: app/traits/Links.php:110 app/traits/Links.php:545
        "This URL contains blacklisted keywords." => "",

        #: app/traits/Links.php:122 app/traits/Links.php:557
        "Linking to executable files is not allowed." => "",

        #: app/traits/Links.php:125 app/traits/Links.php:560
        "The expiry date must be later than today." => "",

        #: app/traits/Links.php:263 app/traits/Links.php:702
        "The total percentage is more than 100. Please re-adjust percentages." => "",

        #: app/traits/Links.php:280
        "Please enter a valid url for the expiration redirect." => "",

        #: app/traits/Links.php:359 app/traits/Links.php:376 app/traits/Links.php:415
        "Link has been shortened" => "",

        #: app/traits/Links.php:402 app/traits/Links.php:743
        "This URL cannot be used with this redirect method because browsers will prevent it for security reasons." => "",

        #: app/traits/Overlays.php:38
        "CTA Contact" => "",

        #: app/traits/Overlays.php:39
        "Create a contact form where users will be able to contact you via email." => "",

        #: app/traits/Overlays.php:48
        "CTA Poll" => "",

        #: app/traits/Overlays.php:49
        "Create a quick poll where users will be able to answer it upon visit." => "",

        #: app/traits/Overlays.php:58
        "CTA Message" => "",

        #: app/traits/Overlays.php:59
        "Create a small popup with a message and a link to a page or a product." => "",

        #: app/traits/Overlays.php:68
        "CTA Newsletter" => "",

        #: app/traits/Overlays.php:69
        "Create a small popup form to collect emails from users." => "",

        #: app/traits/Overlays.php:78
        "CTA Image" => "",

        #: app/traits/Overlays.php:79
        "Create a small popup with an image of your choice." => "",

        #: app/traits/Overlays.php:88
        #: storage/themes/default/overlay/create_coupon.php:90
        "Coupon" => "",

        #: app/traits/Overlays.php:89
        "Create a small popup with a coupon code that users can use." => "",

        #: app/traits/Payments.php:47 app/traits/Payments.php:89
        "PayPal" => "",

        #: app/traits/Payments.php:67 app/traits/Payments.php:109
        #: app/traits/Payments.php:131
        "Credit Card" => "",

        #: app/traits/Payments.php:155
        "Transfer payments via your bank" => "",

        #: app/traits/Pixels.php:149
        "Google Ads pixel ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:160
        "LinkedIn ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:171
        "Twitter ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:182
        "AdRoll ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:193
        "Quora ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:204
        "GTM container ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:215
        "Google Analytics ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:227
        "Snapchat ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:239
        "Pinterest ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:251
        "Reddit ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:263
        "Bing ID is not correct. Please double check." => "",

        #: app/traits/Pixels.php:275
        "TikTok ID is not correct. Please double check." => "",

        #: core/Auth.class.php:143 core/Auth.class.php:199
        "This user does not exist." => "",

        #: core/Helper.class.php:365
        "{d} {p} ago" => "",

        #: core/Helper.class.php:482
        "First" => "",

        #: core/Helper.class.php:483
        "Last" => "",

        #: core/Helper.class.php:485 core/Helper.class.php:507
        "Previous" => "",

        #: core/Helper.class.php:486 core/Helper.class.php:508
        "Next" => "",

        #: storage/themes/default/auth/2fa.php:15 storage/themes/the23/auth/2fa.php:16
        "The access code can be found on the Authenticator app. Please enter the code shown for this website. If you lost your phone or can't use the app, please contact us." => "",

        #: storage/themes/default/auth/2fa.php:22
        #: storage/themes/default/user/security.php:119
        #: storage/themes/default/user/security.php:120
        #: storage/themes/default/user/settings.php:313
        #: storage/themes/default/user/settings.php:314
        #: storage/themes/the23/auth/2fa.php:23
        "2FA Access Code" => "",

        #: storage/themes/default/auth/2fa.php:29 storage/themes/the23/auth/2fa.php:25
        "Recover 2FA" => "",

        #: storage/themes/default/auth/2fa.php:32 storage/themes/the23/auth/2fa.php:30
        "Validate" => "",

        #: storage/themes/default/auth/2fa.php:48 storage/themes/the23/auth/2fa.php:47
        "Reset 2FA" => "",

        #: storage/themes/default/auth/2fa.php:52 storage/themes/the23/auth/2fa.php:51
        "To recover your account, you will need your secret key and access to the email address on the account. If you do not have access to the 2FA secret key, please contact us." => "",

        #: storage/themes/default/auth/2fa.php:61 storage/themes/the23/auth/2fa.php:60
        "Reset" => "",

        #: storage/themes/default/auth/invite.php:15
        #: storage/themes/the23/auth/invite.php:20
        "Join team and collaborate on everything" => "",

        #: storage/themes/default/auth/invite.php:31
        #: storage/themes/default/auth/register.php:53
        #: storage/themes/default/user/settings.php:45
        #: storage/themes/the23/auth/invite.php:33
        #: storage/themes/the23/auth/register.php:54
        "Username" => "",

        #: storage/themes/default/auth/invite.php:40
        #: storage/themes/default/auth/login.php:33
        #: storage/themes/default/auth/register.php:73
        #: storage/themes/default/gates/password.php:22
        #: storage/themes/default/pages/qr.php:173
        #: storage/themes/default/qr/edit.php:316 storage/themes/default/qr/new.php:335
        #: storage/themes/default/user/billing.php:146
        #: storage/themes/default/user/settings.php:54
        #: storage/themes/the23/auth/invite.php:39
        #: storage/themes/the23/auth/login.php:72
        #: storage/themes/the23/auth/register.php:66
        #: storage/themes/the23/auth/reset.php:26
        #: storage/themes/the23/auth/reset.php:32
        #: storage/themes/the23/gates/password.php:19
        #: storage/themes/the23/pages/qr.php:174
        "Password" => "",

        #: storage/themes/default/auth/invite.php:49
        #: storage/themes/default/auth/register.php:86
        #: storage/themes/default/auth/reset.php:30
        #: storage/themes/default/user/security.php:146
        #: storage/themes/default/user/settings.php:61
        #: storage/themes/default/user/settings.php:260
        #: storage/themes/the23/auth/invite.php:45
        #: storage/themes/the23/auth/register.php:72
        "Confirm Password" => "",

        #: storage/themes/default/auth/invite.php:61
        #: storage/themes/default/auth/register.php:100
        #: storage/themes/the23/auth/invite.php:52
        #: storage/themes/the23/auth/register.php:79
        "I agree to the" => "",

        #: storage/themes/default/auth/invite.php:68
        #: storage/themes/default/auth/register.php:107
        #: storage/themes/the23/auth/invite.php:54
        #: storage/themes/the23/auth/register.php:81
        "I agree to the terms and conditions" => "",

        #: storage/themes/default/auth/invite.php:73
        #: storage/themes/default/pages/consent.php:14
        #: storage/themes/the23/auth/invite.php:61
        #: storage/themes/the23/pages/consent.php:13
        "Accept" => "",

        #: storage/themes/default/auth/login.php:17
        #: storage/themes/the23/auth/login.php:61
        "Email or username" => "",

        #: storage/themes/default/auth/login.php:26
        #: storage/themes/default/auth/login.php:103
        #: storage/themes/the23/auth/login.php:65
        #: storage/themes/the23/auth/login.php:103
        "Don't have an account?" => "",

        #: storage/themes/default/auth/login.php:44
        #: storage/themes/the23/auth/login.php:76
        "Forgot Password?" => "",

        #: storage/themes/default/auth/login.php:51
        #: storage/themes/the23/auth/login.php:83
        "Remember me" => "",

        #: storage/themes/default/auth/login.php:57
        #: storage/themes/default/auth/register.php:119
        #: storage/themes/default/partials/main_menu.php:170
        #: storage/themes/default/partials/main_menu.php:189
        #: storage/themes/the23/auth/invite.php:65
        #: storage/themes/the23/auth/login.php:89
        #: storage/themes/the23/auth/register.php:92
        #: storage/themes/the23/partials/main_menu.php:220
        "Login" => "",

        #: storage/themes/default/auth/login.php:63
        #: storage/themes/default/auth/register.php:45
        #: storage/themes/the23/auth/login.php:52
        #: storage/themes/the23/auth/register.php:44
        "or" => "",

        #: storage/themes/default/auth/login.php:69
        #: storage/themes/default/auth/login.php:70
        #: storage/themes/default/auth/login.php:77
        #: storage/themes/default/auth/login.php:78
        #: storage/themes/default/auth/login.php:85
        #: storage/themes/default/auth/login.php:86
        #: storage/themes/default/auth/register.php:21
        #: storage/themes/default/auth/register.php:22
        #: storage/themes/default/auth/register.php:29
        #: storage/themes/default/auth/register.php:30
        #: storage/themes/default/auth/register.php:37
        #: storage/themes/default/auth/register.php:38
        #: storage/themes/the23/auth/login.php:25
        #: storage/themes/the23/auth/login.php:29
        #: storage/themes/the23/auth/login.php:30
        #: storage/themes/the23/auth/login.php:34
        #: storage/themes/the23/auth/login.php:35
        #: storage/themes/the23/auth/login.php:39
        #: storage/themes/the23/auth/login.php:40
        #: storage/themes/the23/auth/login.php:45
        #: storage/themes/the23/auth/login.php:46
        #: storage/themes/the23/auth/register.php:24
        #: storage/themes/the23/auth/register.php:28
        #: storage/themes/the23/auth/register.php:29
        #: storage/themes/the23/auth/register.php:33
        #: storage/themes/the23/auth/register.php:34
        #: storage/themes/the23/auth/register.php:38
        #: storage/themes/the23/auth/register.php:39
        "Sign in with" => "",

        #: storage/themes/default/auth/login.php:96
        #: storage/themes/default/auth/register.php:122
        #: storage/themes/default/partials/footer.php:91
        #: storage/themes/the23/auth/2fa.php:35 storage/themes/the23/auth/forgot.php:39
        #: storage/themes/the23/auth/invite.php:69
        #: storage/themes/the23/auth/login.php:96
        #: storage/themes/the23/auth/register.php:97
        #: storage/themes/the23/auth/reset.php:44
        #: storage/themes/the23/partials/footer.php:89
        "All Rights Reserved" => "",

        #: storage/themes/default/auth/login.php:105
        #: storage/themes/default/auth/register.php:13
        #: storage/themes/default/partials/footer.php:10
        #: storage/themes/the23/auth/login.php:105
        "Start your marketing campaign now and reach your customers efficiently." => "",

        #: storage/themes/default/auth/login.php:108
        #: storage/themes/default/auth/register.php:114
        #: storage/themes/default/pages/qr.php:291
        #: storage/themes/the23/auth/login.php:108
        #: storage/themes/the23/auth/register.php:88
        #: storage/themes/the23/pages/qr.php:292
        "Register" => "",

        #: storage/themes/default/auth/register.php:12
        "Create your account" => "",

        #: storage/themes/default/auth/register.php:55
        #: storage/themes/the23/auth/invite.php:32
        #: storage/themes/the23/auth/register.php:53
        "Please enter a username" => "",

        #: storage/themes/default/auth/register.php:62
        "Email address" => "",

        #: storage/themes/default/auth/register.php:77
        #: storage/themes/the23/auth/invite.php:38
        #: storage/themes/the23/auth/register.php:65
        #: storage/themes/the23/gates/password.php:18
        "Please enter a valid password." => "",

        #: storage/themes/default/auth/register.php:90
        #: storage/themes/the23/auth/invite.php:44
        #: storage/themes/the23/auth/register.php:71
        "Please confirm your password." => "",

        #: storage/themes/default/auth/register.php:118
        #: storage/themes/the23/auth/invite.php:65
        #: storage/themes/the23/auth/register.php:92
        "Already have an account?" => "",

        #: storage/themes/default/auth/reset.php:21
        "New Password" => "",

        #: storage/themes/default/bio/edit.php:3
        #: storage/themes/default/bio/index.php:92
        #: storage/themes/the23/class/themeSettings.php:132
        "Default" => "",

        #: storage/themes/default/bio/edit.php:5
        #: storage/themes/default/integrations/zapier.php:27
        #: storage/themes/default/user/affiliate.php:92
        "Save" => "",

        #: storage/themes/default/bio/edit.php:13 storage/themes/default/qr/bulk.php:38
        "Content" => "",

        #: storage/themes/default/bio/edit.php:16
        #: storage/themes/default/bio/edit.php:88
        "Social Links" => "",

        #: storage/themes/default/bio/edit.php:19
        #: storage/themes/default/integrations/wordpress.php:61
        "Appearance" => "",

        #: storage/themes/default/bio/edit.php:25
        "Data" => "",

        #: storage/themes/default/bio/edit.php:32
        #: storage/themes/default/bio/index.php:55
        "View Bio" => "",

        #: storage/themes/default/bio/edit.php:59
        "Bio Page Name" => "",

        #: storage/themes/default/bio/edit.php:63
        "Bio Page Alias" => "",

        #: storage/themes/default/bio/edit.php:71
        #: storage/themes/default/bio/index.php:146
        "Choose domain to generate the link with" => "",

        #: storage/themes/default/bio/edit.php:75
        "Leave this field empty to generate a random alias." => "",

        #: storage/themes/default/bio/edit.php:84
        #: storage/themes/default/bio/widgets.php:5
        "Add Link or Content" => "",

        #: storage/themes/default/bio/edit.php:107
        "You have already added a link to this platform" => "",

        #: storage/themes/default/bio/edit.php:107
        #: storage/themes/default/bio/index.php:229
        #: storage/themes/default/qr/index.php:194
        #: storage/themes/default/user/index.php:294
        #: storage/themes/default/user/index.php:322
        #: storage/themes/default/user/index.php:354
        #: storage/themes/default/user/links.php:243
        #: storage/themes/default/user/links.php:271
        #: storage/themes/default/user/links.php:303
        "Add" => "",

        #: storage/themes/default/bio/edit.php:134
        "Position" => "",

        #: storage/themes/default/bio/edit.php:136
        "Off" => "",

        #: storage/themes/default/bio/edit.php:137
        "Top" => "",

        #: storage/themes/default/bio/edit.php:138
        #: storage/themes/default/class/themeSettings.php:156
        #: storage/themes/the23/class/themeSettings.php:193
        "Bottom" => "",

        #: storage/themes/default/bio/edit.php:144
        "Header Layout" => "",

        #: storage/themes/default/bio/edit.php:179
        "Header Banner" => "",

        #: storage/themes/default/bio/edit.php:180
        "Please choose a valid image. JPG, PNG" => "",

        #: storage/themes/default/bio/edit.php:183
        "Themes" => "",

        #: storage/themes/default/bio/edit.php:288
        "Fonts" => "",

        #: storage/themes/default/bio/edit.php:308
        #: storage/themes/default/qr/bulk.php:349
        #: storage/themes/default/qr/edit.php:734 storage/themes/default/qr/new.php:728
        "Text Color" => "",

        #: storage/themes/default/bio/edit.php:313
        "Custom Background" => "",

        #: storage/themes/default/bio/edit.php:315
        #: storage/themes/default/bio/edit.php:328
        #: storage/themes/default/pages/qr.php:239
        #: storage/themes/default/qr/bulk.php:65 storage/themes/default/qr/bulk.php:83
        #: storage/themes/default/qr/edit.php:446
        #: storage/themes/default/qr/edit.php:464 storage/themes/default/qr/new.php:444
        #: storage/themes/default/qr/new.php:462 storage/themes/the23/pages/qr.php:240
        "Background" => "",

        #: storage/themes/default/bio/edit.php:318
        #: storage/themes/default/pages/qr.php:230
        #: storage/themes/default/qr/bulk.php:56 storage/themes/default/qr/edit.php:437
        #: storage/themes/default/qr/new.php:435 storage/themes/the23/pages/qr.php:231
        "Single Color" => "",

        #: storage/themes/default/bio/edit.php:319
        #: storage/themes/default/qr/bulk.php:57 storage/themes/default/qr/edit.php:438
        #: storage/themes/default/qr/new.php:436
        "Gradient Color" => "",

        #: storage/themes/default/bio/edit.php:338
        #: storage/themes/default/qr/bulk.php:90 storage/themes/default/qr/edit.php:471
        #: storage/themes/default/qr/new.php:469
        "Gradient Start" => "",

        #: storage/themes/default/bio/edit.php:344
        #: storage/themes/default/qr/bulk.php:94 storage/themes/default/qr/edit.php:475
        #: storage/themes/default/qr/new.php:473
        "Gradient Stop" => "",

        #: storage/themes/default/bio/edit.php:350
        "Gradient Angle" => "",

        #: storage/themes/default/bio/edit.php:355
        "Please choose a valid background image. JPG, PNG" => "",

        #: storage/themes/default/bio/edit.php:358
        "Buttons" => "",

        #: storage/themes/default/bio/edit.php:360
        "Button Color" => "",

        #: storage/themes/default/bio/edit.php:364
        #: storage/themes/default/overlay/create_contact.php:128
        #: storage/themes/default/overlay/create_coupon.php:67
        #: storage/themes/default/overlay/create_message.php:93
        #: storage/themes/default/overlay/create_newsletter.php:87
        #: storage/themes/default/overlay/create_poll.php:86
        #: storage/themes/default/overlay/edit_contact.php:129
        #: storage/themes/default/overlay/edit_coupon.php:67
        #: storage/themes/default/overlay/edit_message.php:93
        #: storage/themes/default/overlay/edit_newsletter.php:87
        #: storage/themes/default/overlay/edit_poll.php:85
        "Button Text Color" => "",

        #: storage/themes/default/bio/edit.php:368
        "Button Style" => "",

        #: storage/themes/default/bio/edit.php:372
        #: storage/themes/default/bio/edit.php:374
        #: storage/themes/default/bio/edit.php:426
        "Rectangular" => "",

        #: storage/themes/default/bio/edit.php:373
        #: storage/themes/default/bio/edit.php:375
        #: storage/themes/default/bio/edit.php:425
        "Rounded" => "",

        #: storage/themes/default/bio/edit.php:374
        #: storage/themes/default/bio/edit.php:375
        "Transparent" => "",

        #: storage/themes/default/bio/edit.php:378
        "Button Shadow" => "",

        #: storage/themes/default/bio/edit.php:382
        "Soft" => "",

        #: storage/themes/default/bio/edit.php:383
        "Hard" => "",

        #: storage/themes/default/bio/edit.php:386
        "Shadow Color" => "",

        #: storage/themes/default/bio/edit.php:393
        "SEO" => "",

        #: storage/themes/default/bio/edit.php:396
        #: storage/themes/default/partials/shortener.php:154
        #: storage/themes/default/user/edit.php:37
        "Meta Title" => "",

        #: storage/themes/default/bio/edit.php:400
        #: storage/themes/default/partials/shortener.php:160
        #: storage/themes/default/user/edit.php:43
        "Meta Description" => "",

        #: storage/themes/default/bio/edit.php:404
        "Meta Image" => "",

        #: storage/themes/default/bio/edit.php:414
        "Display Avatar" => "",

        #: storage/themes/default/bio/edit.php:415
        "Display or hide your avatar from your Bio page" => "",

        #: storage/themes/default/bio/edit.php:423
        "Avatar Style" => "",

        #: storage/themes/default/bio/edit.php:433
        "Verified Badge" => "",

        #: storage/themes/default/bio/edit.php:434
        "Display the verified badge on this Bio Page" => "",

        #: storage/themes/default/bio/edit.php:445
        "Sensitive content warns users before showing them the Bio Page" => "",

        #: storage/themes/default/bio/edit.php:455
        "Cookie Popup" => "",

        #: storage/themes/default/bio/edit.php:456
        "Cookie popup allows users to review cookie collection terms" => "",

        #: storage/themes/default/bio/edit.php:466
        "Share Icon" => "",

        #: storage/themes/default/bio/edit.php:467
        "Share icon allows users to quickly share the Bio Page" => "",

        #: storage/themes/default/bio/edit.php:475
        "Please choose a premium package to unlock this feature" => "",

        #: storage/themes/default/bio/edit.php:478
        "Remove our branding from your Bio Page." => "",

        #: storage/themes/default/bio/edit.php:486 storage/themes/default/index.php:32
        #: storage/themes/default/partials/shortener.php:94
        #: storage/themes/default/partials/shortenermodal.php:91
        #: storage/themes/default/user/edit.php:457 storage/themes/the23/index.php:33
        "Password Protection" => "",

        #: storage/themes/default/bio/edit.php:487
        "By adding a password, you can restrict the access" => "",

        #: storage/themes/default/bio/edit.php:490 storage/themes/default/index.php:33
        #: storage/themes/default/partials/shortener.php:98
        #: storage/themes/default/partials/shortenermodal.php:95
        #: storage/themes/default/user/edit.php:460 storage/themes/the23/index.php:34
        "Type your password here" => "",

        #: storage/themes/default/bio/edit.php:495
        #: storage/themes/default/partials/shortener.php:284
        #: storage/themes/default/user/edit.php:322
        "Targeting Pixels" => "",

        #: storage/themes/default/bio/edit.php:496
        #: storage/themes/default/partials/shortener.php:285
        #: storage/themes/default/user/edit.php:323
        "Add your targeting pixels below from the list. Please make sure to enable them in the pixels settings." => "",

        #: storage/themes/default/bio/edit.php:512
        "Custom CSS" => "",

        #: storage/themes/default/bio/edit.php:520
        #: storage/themes/default/qr/bulk.php:184
        #: storage/themes/default/qr/bulk.php:361
        #: storage/themes/default/qr/edit.php:570
        #: storage/themes/default/qr/edit.php:744 storage/themes/default/qr/new.php:563
        #: storage/themes/default/qr/new.php:740
        "Upgrade to unlock this feature" => "",

        #: storage/themes/default/bio/edit.php:527
        "You will be able to download submitted data here once available." => "",

        #: storage/themes/default/bio/edit.php:532
        #: storage/themes/default/overlay/edit_newsletter.php:121
        "Newsletter Emails" => "",

        #: storage/themes/default/bio/edit.php:535
        #: storage/themes/default/overlay/edit_newsletter.php:124
        "Collected {c} emails in total" => "",

        #: storage/themes/default/bio/edit.php:536
        #: storage/themes/default/overlay/edit_newsletter.php:125
        "Download as CSV" => "",

        #: storage/themes/default/bio/edit.php:554
        #: storage/themes/default/user/links.php:180
        "Short Link Info" => "",

        #: storage/themes/default/bio/edit.php:562
        #: storage/themes/default/integrations/shortcuts.php:50
        #: storage/themes/default/partials/shortenermodal.php:128
        #: storage/themes/default/qr/edit.php:789
        #: storage/themes/default/qr/edit.php:798
        #: storage/themes/default/qr/index.php:239
        #: storage/themes/default/user/links.php:188
        "Download" => "",

        #: storage/themes/default/bio/edit.php:574
        #: storage/themes/default/pages/report.php:25
        #: storage/themes/default/partials/shortenermodal.php:120
        #: storage/themes/default/partials/shortenermodal.php:140
        #: storage/themes/default/user/links.php:200
        #: storage/themes/the23/pages/report.php:17
        "Short Link" => "",

        #: storage/themes/default/bio/edit.php:589
        #: storage/themes/default/user/links.php:215
        "Done" => "",

        #: storage/themes/default/bio/index.php:7
        #: storage/themes/default/bio/index.php:115
        #: storage/themes/default/bio/index.php:127
        #: storage/themes/default/teams/edit.php:27
        #: storage/themes/default/teams/index.php:33
        "Create Bio" => "",

        #: storage/themes/default/bio/index.php:14
        #: storage/themes/default/domains/index.php:14
        #: storage/themes/default/domains/new.php:63
        #: storage/themes/default/overlay/create.php:33
        #: storage/themes/default/overlay/index.php:12
        #: storage/themes/default/pixels/index.php:14
        #: storage/themes/default/pricing/table.php:29
        #: storage/themes/default/qr/bulk.php:36 storage/themes/default/qr/index.php:17
        #: storage/themes/default/splash/index.php:12
        #: storage/themes/default/teams/index.php:9
        #: storage/themes/default/user/billing.php:68
        #: storage/themes/default/user/billing.php:69
        #: storage/themes/default/user/billing.php:74
        #: storage/themes/default/user/billing.php:76
        #: storage/themes/default/user/channels.php:14
        #: storage/themes/default/user/confirmation.php:72
        #: storage/themes/default/user/confirmation.php:73
        #: storage/themes/default/user/confirmation.php:77
        #: storage/themes/default/user/confirmation.php:78
        #: storage/themes/default/user/confirmation.php:79
        #: storage/themes/default/user/confirmation.php:80
        #: storage/themes/default/user/confirmation.php:81
        #: storage/themes/default/user/confirmation.php:82
        #: storage/themes/default/user/confirmation.php:83
        #: storage/themes/default/user/confirmation.php:84
        #: storage/themes/default/user/confirmation.php:88
        #: storage/themes/default/user/links.php:105
        #: storage/themes/the23/pricing/list.php:37
        "Unlimited" => "",

        #: storage/themes/default/bio/index.php:16
        #: storage/themes/default/user/campaigns.php:43
        "views" => "",

        #: storage/themes/default/bio/index.php:22
        #: storage/themes/default/overlay/index.php:17
        #: storage/themes/default/pixels/index.php:19
        #: storage/themes/default/qr/index.php:25
        #: storage/themes/default/splash/index.php:17
        "Search for {t}" => "",

        #: storage/themes/default/bio/index.php:28
        #: storage/themes/default/qr/index.php:31
        #: storage/themes/default/user/links.php:50
        "Newest" => "",

        #: storage/themes/default/bio/index.php:29
        #: storage/themes/default/qr/index.php:32
        #: storage/themes/default/user/links.php:51
        "Oldest" => "",

        #: storage/themes/default/bio/index.php:57
        "Set as Default" => "",

        #: storage/themes/default/bio/index.php:60
        #: storage/themes/default/partials/links.php:25
        "Custom QR Code" => "",

        #: storage/themes/default/bio/index.php:63
        #: storage/themes/default/qr/index.php:93
        #: storage/themes/default/user/index.php:88
        #: storage/themes/default/user/links.php:24
        "Add to Channel" => "",

        #: storage/themes/default/bio/index.php:64
        #: storage/themes/default/partials/links.php:31
        #: storage/themes/default/qr/index.php:94
        "Reset Stats" => "",

        #: storage/themes/default/bio/index.php:65
        #: storage/themes/default/qr/index.php:95
        "Duplicate" => "",

        #: storage/themes/default/bio/index.php:87
        #: storage/themes/default/qr/index.php:109
        #: storage/themes/default/user/channel.php:36
        "Remove from channel" => "",

        #: storage/themes/default/bio/index.php:94
        #: storage/themes/default/partials/links.php:45
        #: storage/themes/default/teams/index.php:96
        "Disabled" => "",

        #: storage/themes/default/bio/index.php:97
        #: storage/themes/default/gates/media.php:14
        #: storage/themes/the23/gates/media.php:15
        "Views" => "",

        #: storage/themes/default/bio/index.php:113
        #: storage/themes/default/overlay/index.php:68
        #: storage/themes/default/pixels/index.php:80
        #: storage/themes/default/qr/index.php:125
        #: storage/themes/default/splash/index.php:67
        #: storage/themes/default/user/campaigns.php:83
        "No content found. You can create some." => "",

        #: storage/themes/default/bio/index.php:132
        "A unique name will help you identify your bio page" => "",

        #: storage/themes/default/bio/index.php:133
        "Please enter a valid name (min 3 characters)" => "",

        #: storage/themes/default/bio/index.php:139
        #: storage/themes/default/domains/edit.php:7
        #: storage/themes/default/domains/index.php:25
        #: storage/themes/default/domains/new.php:9
        #: storage/themes/default/partials/shortener.php:35
        #: storage/themes/default/partials/shortenermodal.php:32
        #: storage/themes/default/qr/bulk.php:14 storage/themes/default/qr/edit.php:17
        #: storage/themes/default/qr/new.php:14
        #: storage/themes/default/user/campaigns.php:110
        #: storage/themes/default/user/edit.php:416
        #: storage/themes/default/user/import.php:27
        "Domain" => "",

        #: storage/themes/default/bio/index.php:154
        #: storage/themes/default/user/edit.php:440
        "Alias" => "",

        #: storage/themes/default/bio/index.php:156
        "Leave this field empty to generate a random alias" => "",

        #: storage/themes/default/bio/index.php:164
        #: storage/themes/default/overlay/create.php:19
        #: storage/themes/default/overlay/create_contact.php:148
        #: storage/themes/default/overlay/create_coupon.php:81
        #: storage/themes/default/overlay/create_image.php:67
        #: storage/themes/default/overlay/create_message.php:110
        #: storage/themes/default/overlay/create_newsletter.php:101
        #: storage/themes/default/overlay/create_poll.php:100
        #: storage/themes/default/overlay/index.php:5
        #: storage/themes/default/splash/create.php:58
        #: storage/themes/default/splash/index.php:5
        "Create" => "",

        #: storage/themes/default/bio/index.php:176
        #: storage/themes/default/bio/widgets.php:48
        #: storage/themes/default/domains/index.php:99
        #: storage/themes/default/overlay/create.php:53
        #: storage/themes/default/overlay/index.php:80
        #: storage/themes/default/pixels/index.php:92
        #: storage/themes/default/qr/index.php:141
        #: storage/themes/default/splash/index.php:78
        #: storage/themes/default/teams/index.php:138
        #: storage/themes/default/user/campaigns.php:187
        #: storage/themes/default/user/channels.php:167
        #: storage/themes/default/user/index.php:223
        #: storage/themes/default/user/links.php:128
        "Are you sure you want to delete this?" => "",

        #: storage/themes/default/bio/index.php:180
        #: storage/themes/default/domains/index.php:103
        #: storage/themes/default/overlay/create.php:57
        #: storage/themes/default/overlay/index.php:84
        #: storage/themes/default/pixels/index.php:96
        #: storage/themes/default/qr/index.php:145
        #: storage/themes/default/splash/index.php:82
        #: storage/themes/default/teams/index.php:142
        #: storage/themes/default/user/campaigns.php:191
        #: storage/themes/default/user/channels.php:171
        #: storage/themes/default/user/index.php:227
        #: storage/themes/default/user/links.php:132
        "You are trying to delete a record. This action is permanent and cannot be reversed." => "",

        #: storage/themes/default/bio/index.php:184
        #: storage/themes/default/bio/index.php:201
        #: storage/themes/default/bio/widgets.php:56
        #: storage/themes/default/domains/index.php:107
        #: storage/themes/default/overlay/create.php:61
        #: storage/themes/default/overlay/index.php:88
        #: storage/themes/default/pixels/index.php:100
        #: storage/themes/default/qr/index.php:149
        #: storage/themes/default/qr/index.php:167
        #: storage/themes/default/qr/index.php:212
        #: storage/themes/default/splash/index.php:86
        #: storage/themes/default/teams/index.php:146
        #: storage/themes/default/user/campaigns.php:195
        #: storage/themes/default/user/channel.php:73
        #: storage/themes/default/user/channels.php:175
        #: storage/themes/default/user/index.php:231
        #: storage/themes/default/user/index.php:248
        #: storage/themes/default/user/index.php:265
        #: storage/themes/default/user/links.php:136
        #: storage/themes/default/user/links.php:153
        #: storage/themes/default/user/links.php:170
        "Confirm" => "",

        #: storage/themes/default/bio/index.php:193
        #: storage/themes/default/qr/index.php:159
        #: storage/themes/default/user/index.php:257
        #: storage/themes/default/user/links.php:162
        "Are you sure you want to reset this?" => "",

        #: storage/themes/default/bio/index.php:197
        #: storage/themes/default/qr/index.php:163
        #: storage/themes/default/user/index.php:261
        #: storage/themes/default/user/links.php:166
        "You are trying to reset all statistic data for this link. This action is permanent and cannot be reversed." => "",

        #: storage/themes/default/bio/index.php:213
        #: storage/themes/default/qr/index.php:178
        #: storage/themes/default/user/index.php:306
        #: storage/themes/default/user/links.php:255
        "Add to Channels" => "",

        #: storage/themes/default/bio/widgets.php:14
        #: storage/themes/default/bio/widgets.php:15
        #: storage/themes/default/blog/menu.php:50
        #: storage/themes/default/blog/menu.php:53
        #: storage/themes/default/help/top.php:14
        #: storage/themes/default/help/top.php:18 storage/themes/the23/blog/menu.php:47
        #: storage/themes/the23/blog/menu.php:49 storage/themes/the23/help/top.php:10
        #: storage/themes/the23/help/top.php:12
        "Search" => "",

        #: storage/themes/default/bio/widgets.php:52
        "You are trying to delete a block. Please changes only take effect when you update the bio page." => "",

        #: storage/themes/default/blog/categories.php:28
        #: storage/themes/default/blog/index.php:24
        #: storage/themes/default/blog/search.php:28
        #: storage/themes/the23/blog/categories.php:33
        #: storage/themes/the23/blog/index.php:31
        #: storage/themes/the23/blog/search.php:41
        "Popular Posts" => "",

        #: storage/themes/default/blog/menu.php:7
        #: storage/themes/default/pixels/index.php:25
        #: storage/themes/default/stats/activity.php:18
        #: storage/themes/default/stats/activity.php:27
        #: storage/themes/default/stats/activity.php:36
        #: storage/themes/default/user/activity.php:10
        #: storage/themes/default/user/activity.php:19
        #: storage/themes/default/user/activity.php:28
        #: storage/themes/the23/blog/menu.php:6
        "All" => "",

        #: storage/themes/default/blog/menu.php:14
        #: storage/themes/the23/blog/menu.php:13
        "More" => "",

        #: storage/themes/default/blog/search.php:23
        #: storage/themes/default/help/search.php:33
        #: storage/themes/the23/blog/search.php:23
        #: storage/themes/the23/blog/search.php:36
        #: storage/themes/the23/help/search.php:33
        "No results" => "",

        #: storage/themes/default/blog/single.php:31
        "Published on" => "",

        #: storage/themes/default/blog/single.php:73
        #: storage/themes/the23/blog/single.php:62
        "Keep reading" => "",

        #: storage/themes/default/blog/single.php:74
        #: storage/themes/the23/blog/single.php:63
        "More posts from our blog" => "",

        #: storage/themes/default/blog/single.php:77
        #: storage/themes/default/stats/index.php:26
        #: storage/themes/default/user/index.php:63
        #: storage/themes/default/user/index.php:143
        #: storage/themes/the23/blog/single.php:66
        "View all" => "",

        #: storage/themes/default/class/themeSettings.php:132
        "Color 1" => "",

        #: storage/themes/default/class/themeSettings.php:138
        "Color 2" => "",

        #: storage/themes/default/class/themeSettings.php:154
        #: storage/themes/the23/class/themeSettings.php:191
        "Language Selector" => "",

        #: storage/themes/default/class/themeSettings.php:159
        #: storage/themes/the23/class/themeSettings.php:196
        "Top & Bottom" => "",

        #: storage/themes/default/class/themeSettings.php:282
        #: storage/themes/default/class/themeSettings.php:306
        #: storage/themes/the23/class/themeSettings.php:329
        #: storage/themes/the23/class/themeSettings.php:353
        "The custom image is not valid. Only a JPG or PNG are accepted." => "",

        #: storage/themes/default/class/themeSettings.php:284
        #: storage/themes/default/class/themeSettings.php:308
        #: storage/themes/the23/class/themeSettings.php:331
        #: storage/themes/the23/class/themeSettings.php:355
        "Custom image must be either a PNG or a JPEG (Max 500kb)." => "",

        #: storage/themes/default/class/themeSettings.php:331
        #: storage/themes/the23/class/themeSettings.php:381
        "Settings are successfully saved." => "",

        #: storage/themes/default/domains/edit.php:13
        #: storage/themes/default/domains/new.php:16
        "Custom Redirect" => "",

        #: storage/themes/default/domains/edit.php:14
        #: storage/themes/default/domains/edit.php:25
        #: storage/themes/default/domains/new.php:17
        #: storage/themes/default/domains/new.php:28
        #: storage/themes/default/stats/partial.php:12
        #: storage/themes/default/user/activity.php:53
        #: storage/themes/default/user/index.php:159
        #: storage/themes/the23/pages/bio.php:96 storage/themes/the23/pages/bio.php:109
        #: storage/themes/the23/pages/bio.php:122
        "Bio Page" => "",

        #: storage/themes/default/domains/edit.php:18
        #: storage/themes/default/domains/edit.php:38
        #: storage/themes/default/domains/index.php:26
        #: storage/themes/default/domains/new.php:21
        #: storage/themes/default/domains/new.php:41
        "Domain Root" => "",

        #: storage/themes/default/domains/edit.php:20
        #: storage/themes/default/domains/edit.php:40
        #: storage/themes/default/domains/new.php:23
        #: storage/themes/default/domains/new.php:43
        "Redirects to this page if someone visits the root domain above without a short alias." => "",

        #: storage/themes/default/domains/edit.php:33
        #: storage/themes/default/domains/new.php:36
        "Assign a Bio Page to be accessed from your root domain." => "",

        #: storage/themes/default/domains/edit.php:44
        #: storage/themes/default/domains/new.php:48
        "Domain 404" => "",

        #: storage/themes/default/domains/edit.php:46
        #: storage/themes/default/domains/new.php:50
        "Redirects to this page if a short url is not found (error 404)." => "",

        #: storage/themes/default/domains/edit.php:49
        "Update Domain" => "",

        #: storage/themes/default/domains/index.php:7
        #: storage/themes/default/domains/new.php:53
        "Add Domain" => "",

        #: storage/themes/default/domains/index.php:27
        "404 Redirect" => "",

        #: storage/themes/default/domains/index.php:37
        #: storage/themes/default/teams/index.php:96
        #: storage/themes/default/user/billing.php:21
        #: storage/themes/default/user/campaigns.php:41
        "Active" => "",

        #: storage/themes/default/domains/index.php:39
        "Pending DNS" => "",

        #: storage/themes/default/domains/index.php:41
        "Inactive/Disabled" => "",

        #: storage/themes/default/domains/index.php:78
        #: storage/themes/default/domains/new.php:70
        "How to setup custom domain" => "",

        #: storage/themes/default/domains/index.php:82
        "If you have a custom domain name that you want to use with our service, you can associate it to your account very easily. Once added, we will add the domain to your account and set it as the default domain name for your URLs. DNS changes could take up to 36 hours. If you are planning to serve SSL on your domain name, we recommend using cloudflare." => "",

        #: storage/themes/default/domains/index.php:85
        #: storage/themes/default/domains/new.php:77
        "To point your domain name, create an A record and set the value to " => "",

        #: storage/themes/default/domains/index.php:87
        "To point your subdomain domain name, create a CNAME record and set the value to " => "",

        #: storage/themes/default/domains/new.php:11
        "You will need to setup a DNS record for your domain to work. See instructions on the right side." => "",

        #: storage/themes/default/domains/new.php:74
        "If you have a custom domain name that you want to use with our service, you can associate it to your account very easily. Once added, we will add the domain to your account and set it as the default domain name for your URLs. DNS changes could take up to 36 hours." => "",

        #: storage/themes/default/domains/new.php:79
        "To point your domain name, create a CNAME record and set the value to " => "",

        #: storage/themes/default/errors/404.php:26
        #: storage/themes/the23/errors/404.php:39
        "Error" => "",

        #: storage/themes/default/errors/404.php:28
        #: storage/themes/the23/errors/404.php:41
        "The page you are looking for could not be found." => "",

        #: storage/themes/default/errors/404.php:32
        #: storage/themes/default/errors/disabled.php:32
        #: storage/themes/default/errors/expired.php:31
        #: storage/themes/the23/errors/404.php:44
        #: storage/themes/the23/errors/disabled.php:45
        #: storage/themes/the23/errors/expired.php:44
        "Back to home" => "",

        #: storage/themes/default/errors/disabled.php:26
        "Stop" => "",

        #: storage/themes/default/errors/disabled.php:28
        #: storage/themes/the23/errors/disabled.php:41
        "There is a problem with this link and we have blocked it either because it is potentially malicious or contains inappropriate content that is against our terms of service. We actively monitor all links on our platform to ensure the safety of all our users. If you have any questions, feel free to contact us." => "",

        #: storage/themes/default/errors/expired.php:25
        #: storage/themes/the23/errors/disabled.php:39
        #: storage/themes/the23/errors/expired.php:39
        "Oops" => "",

        #: storage/themes/default/errors/expired.php:27
        #: storage/themes/the23/errors/expired.php:41
        "The link you are trying to access is now expired either because the campaign ended or the link was disabled. If you have any questions, feel free to contact us." => "",

        #: storage/themes/default/gates/custom.php:12
        #: storage/themes/default/splash/edit.php:86
        #: storage/themes/the23/gates/custom.php:13
        "View site" => "",

        #: storage/themes/default/gates/custom.php:15
        #: storage/themes/the23/gates/custom.php:16
        "Seconds" => "",

        #: storage/themes/default/gates/custom.php:21
        #: storage/themes/the23/gates/custom.php:22
        "Powered by" => "",

        #: storage/themes/default/gates/domain.php:8
        #: storage/themes/the23/gates/domain.php:8
        "Custom domain working" => "",

        #: storage/themes/default/gates/domain.php:9
        #: storage/themes/the23/gates/domain.php:9
        "Your <strong>domain name</strong> is now successfully pointed to our server. You can now start using it from the platform and shorten branded links with your own domain name." => "",

        #: storage/themes/default/gates/domain.php:10
        #: storage/themes/the23/gates/domain.php:10
        "If you want to display another page instead of this page when someone accesses your root domain name, you can define that link in your settings by logging in to your account. You can also define a custom 404 error page." => "",

        #: storage/themes/default/gates/domain.php:11
        #: storage/themes/the23/gates/domain.php:11
        "If you have any questions, please do not hesitate to contact us." => "",

        #: storage/themes/default/gates/domain.php:16
        #: storage/themes/default/help/single.php:26
        #: storage/themes/default/layouts/api.php:100
        #: storage/themes/default/layouts/auth.php:67
        #: storage/themes/default/layouts/main.php:108
        #: storage/themes/default/layouts/stats.php:107
        #: storage/themes/default/pages/bio.php:13
        #: storage/themes/default/pages/qr.php:307
        #: storage/themes/default/user/confirmation.php:62
        #: storage/themes/the23/gates/domain.php:16
        #: storage/themes/the23/help/single.php:24
        #: storage/themes/the23/pages/affiliate.php:19
        #: storage/themes/the23/partials/languagejs.php:40
        #: storage/themes/the23/pricing/index.php:60
        "Contact us" => "",

        #: storage/themes/default/gates/frame.php:18
        #: storage/themes/default/layouts/api.php:80
        #: storage/themes/default/layouts/auth.php:47
        #: storage/themes/default/layouts/dashboard.php:140
        #: storage/themes/default/layouts/main.php:88
        #: storage/themes/default/layouts/stats.php:87
        #: storage/themes/default/pricing/checkout.php:194
        #: storage/themes/default/pricing/checkout.php:211
        #: storage/themes/the23/gates/frame.php:16
        #: storage/themes/the23/partials/languagejs.php:20
        "Close" => "",

        #: storage/themes/default/gates/media.php:26
        #: storage/themes/the23/gates/media.php:27
        "Short URL" => "",

        #: storage/themes/default/gates/media.php:33
        #: storage/themes/default/gates/media.php:34
        #: storage/themes/default/gates/profile.php:146
        #: storage/themes/default/gates/profile.php:148
        #: storage/themes/default/gates/profile.php:150
        #: storage/themes/default/gates/profile.php:152
        #: storage/themes/default/gates/profile.php:154
        #: storage/themes/the23/gates/media.php:34
        #: storage/themes/the23/gates/media.php:35
        #: storage/themes/the23/gates/media.php:37
        #: storage/themes/the23/gates/media.php:38
        "Share on" => "",

        #: storage/themes/default/gates/password.php:14
        #: storage/themes/the23/gates/password.php:9
        "Enter Password" => "",

        #: storage/themes/default/gates/password.php:15
        #: storage/themes/the23/gates/password.php:10
        "The access to this URL is restricted. Please enter your password to view it." => "",

        #: storage/themes/default/gates/password.php:31
        #: storage/themes/the23/gates/password.php:23
        "Unlock" => "",

        #: storage/themes/default/gates/profile.php:16
        #: storage/themes/default/gates/profile.php:45
        #: storage/themes/default/gates/profile.php:77
        "Verified Account" => "",

        #: storage/themes/default/gates/profile.php:129
        #: storage/themes/default/gates/profile.php:134
        "Share" => "",

        #: storage/themes/default/gates/profile.php:156
        "Share via Email" => "",

        #: storage/themes/default/gates/splash.php:13
        #: storage/themes/the23/gates/splash.php:14
        "You are about to be redirected to another page." => "",

        #: storage/themes/default/gates/splash.php:24
        #: storage/themes/the23/gates/splash.php:25
        "Redirect me" => "",

        #: storage/themes/default/gates/splash.php:27
        #: storage/themes/default/pages/consent.php:17
        #: storage/themes/the23/gates/splash.php:28
        #: storage/themes/the23/pages/consent.php:16
        "Take me to your homepage" => "",

        #: storage/themes/default/gates/splash.php:32
        #: storage/themes/the23/gates/splash.php:33
        "You are about to be redirected to another page. We are not responsible for the content of that page or the consequences it may have on you." => "",

        #: storage/themes/default/help/category.php:6
        #: storage/themes/default/help/search.php:6
        #: storage/themes/default/help/single.php:6
        #: storage/themes/default/partials/main_menu.php:3
        #: storage/themes/the23/blog/single.php:9
        #: storage/themes/the23/help/category.php:6
        #: storage/themes/the23/help/search.php:6
        #: storage/themes/the23/help/single.php:8
        "Home" => "",

        #: storage/themes/default/help/category.php:41
        #: storage/themes/default/help/index.php:53
        #: storage/themes/default/help/search.php:26
        #: storage/themes/the23/help/category.php:39
        #: storage/themes/the23/help/index.php:49
        #: storage/themes/the23/help/search.php:26
        "Updated {t}" => "",

        #: storage/themes/default/help/index.php:5
        #: storage/themes/the23/help/index.php:5
        "Browse Topics" => "",

        #: storage/themes/default/help/index.php:29
        #: storage/themes/the23/help/index.php:25
        "articles" => "",

        #: storage/themes/default/help/index.php:39
        #: storage/themes/the23/help/index.php:35
        "Common Questions" => "",

        #: storage/themes/default/help/search.php:11
        "Search for \"{q}\"" => "",

        #: storage/themes/default/help/single.php:25
        #: storage/themes/the23/help/single.php:23
        "Did not answer your question?" => "",

        #: storage/themes/default/help/single.php:30
        #: storage/themes/the23/help/single.php:30
        "Related Questions" => "",

        #: storage/themes/default/index.php:15 storage/themes/the23/index.php:13
        "Paste a long url" => "",

        #: storage/themes/default/index.php:18
        #: storage/themes/default/partials/shortener.php:18
        #: storage/themes/default/partials/shortenermodal.php:21
        #: storage/themes/the23/index.php:19
        "Shorten" => "",

        #: storage/themes/default/index.php:22 storage/themes/the23/index.php:23
        "Advanced" => "",

        #: storage/themes/default/index.php:27
        #: storage/themes/default/partials/shortener.php:69
        #: storage/themes/default/partials/shortenermodal.php:66
        #: storage/themes/default/user/edit.php:452 storage/themes/the23/index.php:28
        "Type your custom alias here" => "",

        #: storage/themes/default/index.php:44 storage/themes/the23/index.php:45
        "Your link has been successfully shortened. Want to more customization options?" => "",

        #: storage/themes/default/index.php:45 storage/themes/the23/index.php:46
        "Get started" => "",

        #: storage/themes/default/index.php:72 storage/themes/the23/index.php:16
        #: storage/themes/the23/index.php:728
        "Your latest links" => "",

        #: storage/themes/default/index.php:80 storage/themes/the23/index.php:738
        "Want more options to customize the link, QR codes, branding and advanced metrics?" => "",

        #: storage/themes/default/index.php:103
        "Latest links" => "",

        #: storage/themes/default/index.php:122 storage/themes/the23/index.php:150
        "One short link, infinite possibilities." => "",

        #: storage/themes/default/index.php:125 storage/themes/the23/index.php:153
        "A short link is a powerful marketing tool when you use it carefully. It is not just a link but a medium between your customer and their destination. A short link allows you to collect so much data about your customers and their behaviors." => "",

        #: storage/themes/default/index.php:139 storage/themes/the23/index.php:321
        "Smart Targeting" => "",

        #: storage/themes/default/index.php:141
        "Target your customers to increase your reach and redirect them to a relevant page. Add a pixel to retarget them in your social media ad campaign to capture them." => "",

        #: storage/themes/default/index.php:156
        "In-Depth Analytics" => "",

        #: storage/themes/default/index.php:158
        "Share your links to your network and measure data to optimize your marketing campaign's performance. Reach an audience that fits your needs." => "",

        #: storage/themes/default/index.php:173
        "Digital Experience" => "",

        #: storage/themes/default/index.php:175
        "Use various powerful tools increase conversion and provide a non-intrusive experience to your customers without disengaging them." => "",

        #: storage/themes/default/index.php:189 storage/themes/default/index.php:235
        "Perfect for sales & marketing" => "",

        #: storage/themes/default/index.php:191 storage/themes/default/index.php:388
        #: storage/themes/the23/index.php:441
        "Understanding your users and customers will help you increase your conversion. Our system allows you to track everything. Whether it is the amount of clicks, the country or the referrer, the data is there for you to analyze it." => "",

        #: storage/themes/default/index.php:202
        "Redirection Tools" => "",

        #: storage/themes/default/index.php:214
        "Powerful Statistics" => "",

        #: storage/themes/default/index.php:226
        "Beautiful Profiles" => "",

        #: storage/themes/default/index.php:244 storage/themes/default/index.php:290
        #: storage/themes/default/index.php:301
        "Powerful tools that work" => "",

        #: storage/themes/default/index.php:246
        "Our product lets your target your users to better understand their behavior and provide them a better overall experience through smart re-targeting. We provide you many powerful tools to reach them better." => "",

        #: storage/themes/default/index.php:257
        #: storage/themes/default/partials/sidebar_menu.php:104
        "Link Management" => "",

        #: storage/themes/default/index.php:269
        "Privacy Control" => "",

        #: storage/themes/default/index.php:281
        "Powerful Dashboard" => "",

        #: storage/themes/default/index.php:327 storage/themes/default/index.php:331
        #: storage/themes/the23/index.php:392 storage/themes/the23/index.php:406
        #: storage/themes/the23/index.php:410 storage/themes/the23/index.php:420
        "New York, United States" => "",

        #: storage/themes/default/index.php:329 storage/themes/default/index.php:349
        #: storage/themes/default/index.php:369
        "Someone visited your link" => "",

        #: storage/themes/default/index.php:337 storage/themes/default/index.php:357
        #: storage/themes/default/index.php:377 storage/themes/the23/index.php:400
        #: storage/themes/the23/index.php:414 storage/themes/the23/index.php:428
        "{d} minutes ago" => "",

        #: storage/themes/default/index.php:347 storage/themes/default/index.php:351
        #: storage/themes/the23/index.php:396
        "Paris, France" => "",

        #: storage/themes/default/index.php:367 storage/themes/default/index.php:371
        #: storage/themes/the23/index.php:424
        "London, United Kingdom" => "",

        #: storage/themes/default/index.php:386
        "Optimize your marketing strategy" => "",

        #: storage/themes/default/index.php:399
        "More features than asked for" => "",

        #: storage/themes/default/index.php:446
        #: storage/themes/default/user/confirmation.php:81
        #: storage/themes/the23/index.php:310
        "Event Tracking" => "",

        #: storage/themes/default/index.php:463 storage/themes/the23/index.php:343
        "Team Management" => "",

        #: storage/themes/default/index.php:480 storage/themes/the23/index.php:354
        "Branded Domain Names" => "",

        #: storage/themes/default/index.php:497
        "Robust API" => "",

        #: storage/themes/default/index.php:514
        "Connect with popular tools and boost your productivity." => "",

        #: storage/themes/default/index.php:596
        "What our customers say about us" => "",

        #: storage/themes/default/index.php:630 storage/themes/the23/index.php:663
        "Powering" => "",

        #: storage/themes/default/index.php:640 storage/themes/the23/index.php:673
        "Serving" => "",

        #: storage/themes/default/index.php:650 storage/themes/the23/index.php:685
        "Trusted by" => "",

        #: storage/themes/default/index.php:655
        "Happy Customers" => "",

        #: storage/themes/default/integrations/index.php:22
        #: storage/themes/default/integrations/slack.php:6
        #: storage/themes/default/integrations/zapier.php:6
        "Connected" => "",

        #: storage/themes/default/integrations/index.php:28
        "Setup" => "",

        #: storage/themes/default/integrations/index.php:47
        "Create your own integration to shorten links and interact with other features with our powerful API." => "",

        #: storage/themes/default/integrations/shortcuts.php:10
        "Shortcuts in an app developed by Apple and it allows you to create an automation. You can download our powerful Shortcut and you will be able to shorten links in a snap and save it directly in your account." => "",

        #: storage/themes/default/integrations/shortcuts.php:12
        "How does it work?" => "",

        #: storage/themes/default/integrations/shortcuts.php:14
        "The Shortcut works in various ways:" => "",

        #: storage/themes/default/integrations/shortcuts.php:16
        "Safari" => "",

        #: storage/themes/default/integrations/shortcuts.php:18
        "If you want shorten the current viewing page, tap the share icon at the bottom of the screen and it will shorten the current URL. It will copy the short URL directly to your clipboard so you can paste it somewhere." => "",

        #: storage/themes/default/integrations/shortcuts.php:20
        "Siri" => "",

        #: storage/themes/default/integrations/shortcuts.php:22
        "To use Siri, copy a link and ask Siri \"Shorten Link\" and it will shorten the link for you and copy it to your clipboard." => "",

        #: storage/themes/default/integrations/shortcuts.php:24
        "Manual" => "",

        #: storage/themes/default/integrations/shortcuts.php:26
        "You can also run the Shortcut by just holding a link then tap Share and you will see Shorten Link in the list." => "",

        #: storage/themes/default/integrations/shortcuts.php:32
        "How to install it?" => "",

        #: storage/themes/default/integrations/shortcuts.php:36
        "Make sure you have the Shortcuts app, if not you can download it from the App Store: " => "",

        #: storage/themes/default/integrations/shortcuts.php:40
        "Download Shortcuts" => "",

        #: storage/themes/default/integrations/shortcuts.php:48
        "Download our Shortcut" => "",

        #: storage/themes/default/integrations/shortcuts.php:57
        "After installation, you will be presented with a configuration screen where you need to enter the API URL and the API key" => "",

        #: storage/themes/default/integrations/shortcuts.php:58
        "API URL" => "",

        #: storage/themes/default/integrations/shortcuts.php:61
        "API Key" => "",

        #: storage/themes/default/integrations/shortcuts.php:67
        "After the configuration is complete, you can start shortening links directly from your device in a single tap." => "",

        #: storage/themes/default/integrations/slack.php:14
        "You can integrate this app with your Slack account and shorten directly from the Slack interface using the command line below. This Slack integration will save all of your links in your account in case you need to access them later. Please see below how to use the command." => "",

        #: storage/themes/default/integrations/slack.php:22
        "The Slack command will return you the short link if everything goes well. In case there is an error, it will return you the error." => "",

        #: storage/themes/default/integrations/slack.php:24
        "If you have set a default domain in your Settings, it will attempt to use that domain to shorten links." => "",

        #: storage/themes/default/integrations/slack.php:26
        "Slack Command" => "",

        #: storage/themes/default/integrations/slack.php:29
        "Shorten link" => "",

        #: storage/themes/default/integrations/slack.php:32
        "Shorten link with custom name" => "",

        #: storage/themes/default/integrations/slack.php:33
        "To send a custom alias, use the following parameter (ABCDXYZ). This will tell the script to shorten the link with the custom alias ABCDXYZ." => "",

        #: storage/themes/default/integrations/slack.php:36
        "Get last 5 clicks" => "",

        #: storage/themes/default/integrations/slack.php:37
        "You can get last 5 clicks if you preceed the short link with \"clicks:\" as follows." => "",

        #: storage/themes/default/integrations/slack.php:40
        #: storage/themes/default/partials/main_menu.php:163
        #: storage/themes/the23/partials/main_menu.php:210
        "Help" => "",

        #: storage/themes/default/integrations/slack.php:41
        "You can always use the help command if you need help or remind you how it works." => "",

        #: storage/themes/default/integrations/wordpress.php:12
        #: storage/themes/default/integrations/wordpress.php:22
        "WordPress Plugin" => "",

        #: storage/themes/default/integrations/wordpress.php:13
        "WordPress Function" => "",

        #: storage/themes/default/integrations/wordpress.php:25
        "You can easily use a shortcode to shorten links with our WordPress plugin. You just need to download it below and upload it in WordPress and that is it. There is no need to configure it as it will be already configured for you. All of your links will be saved in your account." => "",

        #: storage/themes/default/integrations/wordpress.php:27
        "Do not share this plugin with anyone you do not trust as they will have access to the full API and essentially your account." => "",

        #: storage/themes/default/integrations/wordpress.php:29
        #: storage/themes/default/integrations/wordpress.php:58
        "Instructions" => "",

        #: storage/themes/default/integrations/wordpress.php:31
        "Download the plugin below" => "",

        #: storage/themes/default/integrations/wordpress.php:32
        #: storage/themes/default/integrations/wordpress.php:61
        "Go to WordPress Admin" => "",

        #: storage/themes/default/integrations/wordpress.php:32
        "Plugins" => "",

        #: storage/themes/default/integrations/wordpress.php:32
        "Add New" => "",

        #: storage/themes/default/integrations/wordpress.php:32
        "Upload Plugin" => "",

        #: storage/themes/default/integrations/wordpress.php:33
        "Upload the plugin named linkshortenershortcode.zip and activate it. The plugin will be named Link Shortener Shortcode." => "",

        #: storage/themes/default/integrations/wordpress.php:36
        "Download Plugin" => "",

        #: storage/themes/default/integrations/wordpress.php:40
        #: storage/themes/default/integrations/wordpress.php:101
        #: storage/themes/default/user/tools.php:24
        "Examples" => "",

        #: storage/themes/default/integrations/wordpress.php:42
        #: storage/themes/default/integrations/wordpress.php:103
        "The following code will apply the shortcode \"shorturl\" to the system and you will be able to use the following format." => "",

        #: storage/themes/default/integrations/wordpress.php:45
        #: storage/themes/default/integrations/wordpress.php:106
        "You can also use the shortcode in html." => "",

        #: storage/themes/default/integrations/wordpress.php:53
        "WordPress Shortcode Function" => "",

        #: storage/themes/default/integrations/wordpress.php:56
        "You can now shorten links directly from WordPress using shortcode. If you don't want to upload a plugin, you can use this method. It is very easy to setup and it works with all versions of WordPress and with any theme. All links you will shorten will be safely stored in your account." => "",

        #: storage/themes/default/integrations/wordpress.php:60
        "Copy your unique php code below" => "",

        #: storage/themes/default/integrations/wordpress.php:61
        "Theme File Editor" => "",

        #: storage/themes/default/integrations/wordpress.php:62
        "On the right side, under Theme Files, find and click on Theme Functions (functions.php)" => "",

        #: storage/themes/default/integrations/wordpress.php:63
        "Paste the code below at the very end of the file and save" => "",

        #: storage/themes/default/integrations/wordpress.php:65
        "Your Unique Code" => "",

        #: storage/themes/default/integrations/wordpress.php:67
        "Do not share this code with anyone you do not trust as they will have access to the full API and essentially your account." => "",

        #: storage/themes/default/integrations/zapier.php:13
        "You can use Zapier to automate campaigns. By adding the URL to the zapier webhook, we will send you important information to that webhook so you can use them." => "",

        #: storage/themes/default/integrations/zapier.php:14
        #: storage/themes/default/partials/links.php:89
        "Note" => "",

        #: storage/themes/default/integrations/zapier.php:14
        "Although this tool is designed for Zapier, it can be used for any webhook system." => "",

        #: storage/themes/default/integrations/zapier.php:17
        #: storage/themes/default/integrations/zapier.php:34
        "URL Zapier Notification" => "",

        #: storage/themes/default/integrations/zapier.php:19
        "We will send a notification to this URL when you create a short URL." => "",

        #: storage/themes/default/integrations/zapier.php:22
        #: storage/themes/default/integrations/zapier.php:38
        "Views Zapier Notification" => "",

        #: storage/themes/default/integrations/zapier.php:24
        "We will send a notification to this URL when someone clicks your URL." => "",

        #: storage/themes/default/integrations/zapier.php:31
        "Sample Response" => "",

        #: storage/themes/default/invoice.php:2 storage/themes/default/invoice.php:32
        "Invoice" => "",

        #: storage/themes/default/invoice.php:25
        #: storage/themes/default/user/affiliate.php:43
        #: storage/themes/default/user/affiliate.php:47
        #: storage/themes/default/user/verification.php:88
        "Pending" => "",

        #: storage/themes/default/invoice.php:36
        "Payment Date" => "",

        #: storage/themes/default/invoice.php:45
        "Bill to" => "",

        #: storage/themes/default/invoice.php:49
        "Tax ID:" => "",

        #: storage/themes/default/invoice.php:63
        "Payment To" => "",

        #: storage/themes/default/invoice.php:82 storage/themes/default/invoice.php:96
        "Subscription" => "",

        #: storage/themes/default/invoice.php:90
        "Tax" => "",

        #: storage/themes/default/invoice.php:105
        #: storage/themes/default/overlay/edit_poll.php:126
        #: storage/themes/default/pricing/checkout.php:160
        #: storage/themes/the23/pricing/checkout.php:183
        "Total" => "",

        #: storage/themes/default/layouts/api.php:64
        #: storage/themes/default/layouts/auth.php:31
        #: storage/themes/default/layouts/dashboard.php:132
        #: storage/themes/default/layouts/main.php:72
        #: storage/themes/default/layouts/stats.php:71
        #: storage/themes/the23/partials/languagejs.php:4
        "The coupon enter is not valid" => "",

        #: storage/themes/default/layouts/api.php:65
        #: storage/themes/default/layouts/auth.php:32
        #: storage/themes/default/layouts/dashboard.php:133
        #: storage/themes/default/layouts/main.php:73
        #: storage/themes/default/layouts/stats.php:72
        #: storage/themes/the23/partials/languagejs.php:5
        "You must select at least 1 url." => "",

        #: storage/themes/default/layouts/api.php:67
        #: storage/themes/default/layouts/auth.php:34
        #: storage/themes/default/layouts/dashboard.php:135
        #: storage/themes/default/layouts/main.php:75
        #: storage/themes/default/layouts/stats.php:74
        #: storage/themes/the23/partials/languagejs.php:7
        "No data is available for this request." => "",

        #: storage/themes/default/layouts/api.php:75
        #: storage/themes/default/layouts/auth.php:42
        #: storage/themes/default/layouts/main.php:83
        #: storage/themes/default/layouts/stats.php:82
        #: storage/themes/the23/partials/languagejs.php:15
        "Cookie Preferences" => "",

        #: storage/themes/default/layouts/api.php:76
        #: storage/themes/default/layouts/auth.php:43
        #: storage/themes/default/layouts/main.php:84
        #: storage/themes/default/layouts/stats.php:83
        #: storage/themes/the23/partials/languagejs.php:16
        "This website uses essential cookies to ensure its proper operation and tracking cookies to understand how you interact with it. You have the option to choose which one to allow." => "",

        #: storage/themes/default/layouts/api.php:77
        #: storage/themes/default/layouts/auth.php:44
        #: storage/themes/default/layouts/main.php:85
        #: storage/themes/default/layouts/stats.php:84
        #: storage/themes/the23/partials/languagejs.php:17
        "Let me choose" => "",

        #: storage/themes/default/layouts/api.php:78
        #: storage/themes/default/layouts/auth.php:45
        #: storage/themes/default/layouts/main.php:86
        #: storage/themes/default/layouts/stats.php:85
        #: storage/themes/the23/partials/languagejs.php:18
        "Accept All" => "",

        #: storage/themes/default/layouts/api.php:79
        #: storage/themes/default/layouts/auth.php:46
        #: storage/themes/default/layouts/main.php:87
        #: storage/themes/default/layouts/stats.php:86
        #: storage/themes/the23/partials/languagejs.php:19
        "Accept Necessary" => "",

        #: storage/themes/default/layouts/api.php:81
        #: storage/themes/default/layouts/auth.php:48
        #: storage/themes/default/layouts/main.php:89
        #: storage/themes/default/layouts/stats.php:88
        #: storage/themes/default/user/settings.php:202
        #: storage/themes/the23/class/themeSettings.php:167
        #: storage/themes/the23/class/themeSettings.php:199
        #: storage/themes/the23/class/themeSettings.php:246
        #: storage/themes/the23/partials/languagejs.php:21
        "Save Settings" => "",

        #: storage/themes/default/layouts/api.php:83
        #: storage/themes/default/layouts/auth.php:50
        #: storage/themes/default/layouts/main.php:91
        #: storage/themes/default/layouts/stats.php:90
        #: storage/themes/the23/partials/languagejs.php:23
        "Strictly Necessary Cookies" => "",

        #: storage/themes/default/layouts/api.php:84
        #: storage/themes/default/layouts/auth.php:51
        #: storage/themes/default/layouts/main.php:92
        #: storage/themes/default/layouts/stats.php:91
        #: storage/themes/the23/partials/languagejs.php:24
        "These cookies are required for the correct functioning of our service and without these cookies you will not be able to use our product." => "",

        #: storage/themes/default/layouts/api.php:87
        #: storage/themes/default/layouts/auth.php:54
        #: storage/themes/default/layouts/main.php:95
        #: storage/themes/default/layouts/stats.php:94
        #: storage/themes/the23/partials/languagejs.php:27
        "Targeting and Analytics" => "",

        #: storage/themes/default/layouts/api.php:88
        #: storage/themes/default/layouts/auth.php:55
        #: storage/themes/default/layouts/main.php:96
        #: storage/themes/default/layouts/stats.php:95
        #: storage/themes/the23/partials/languagejs.php:28
        "Providers such as Google use these cookies to measure and provide us with analytics on how you interact with our website. All of the data is anonymized and cannot be used to identify you." => "",

        #: storage/themes/default/layouts/api.php:91
        #: storage/themes/default/layouts/auth.php:58
        #: storage/themes/default/layouts/main.php:99
        #: storage/themes/default/layouts/stats.php:98
        #: storage/themes/the23/partials/languagejs.php:31
        "Advertisement" => "",

        #: storage/themes/default/layouts/api.php:92
        #: storage/themes/default/layouts/auth.php:59
        #: storage/themes/default/layouts/main.php:100
        #: storage/themes/default/layouts/stats.php:99
        #: storage/themes/the23/partials/languagejs.php:32
        "These cookies are set by our advertisers so they can provide you with relevant ads." => "",

        #: storage/themes/default/layouts/api.php:95
        #: storage/themes/default/layouts/auth.php:62
        #: storage/themes/default/layouts/main.php:103
        #: storage/themes/default/layouts/stats.php:102
        #: storage/themes/the23/partials/languagejs.php:35
        "Additional Functionality" => "",

        #: storage/themes/default/layouts/api.php:96
        #: storage/themes/default/layouts/auth.php:63
        #: storage/themes/default/layouts/main.php:104
        #: storage/themes/default/layouts/stats.php:103
        #: storage/themes/the23/partials/languagejs.php:36
        "We use various providers to enhance our products and they may or may not set cookies. Enhancement can include Content Delivery Networks, Google Fonts, etc" => "",

        #: storage/themes/default/layouts/api.php:99
        #: storage/themes/default/layouts/auth.php:66
        #: storage/themes/default/layouts/main.php:107
        #: storage/themes/default/layouts/stats.php:106
        #: storage/themes/the23/partials/languagejs.php:39
        "Privacy Policy" => "",

        #: storage/themes/default/layouts/api.php:100
        #: storage/themes/default/layouts/auth.php:67
        #: storage/themes/default/layouts/main.php:108
        #: storage/themes/default/layouts/stats.php:107
        #: storage/themes/the23/partials/languagejs.php:40
        "You can view our privacy policy" => "",

        #: storage/themes/default/layouts/api.php:100
        #: storage/themes/default/layouts/auth.php:67
        #: storage/themes/default/layouts/main.php:108
        #: storage/themes/default/layouts/stats.php:107
        #: storage/themes/the23/partials/languagejs.php:40
        "here" => "",

        #: storage/themes/default/layouts/api.php:100
        #: storage/themes/default/layouts/auth.php:67
        #: storage/themes/default/layouts/main.php:108
        #: storage/themes/default/layouts/stats.php:107
        #: storage/themes/the23/partials/languagejs.php:40
        "If you have any questions, please do not hesitate to" => "",

        #: storage/themes/default/layouts/dashboard.php:31
        #: storage/themes/default/layouts/main.php:31
        "You are logged in as another user" => "",

        #: storage/themes/default/layouts/dashboard.php:32
        #: storage/themes/default/layouts/main.php:32
        "Return to my account" => "",

        #: storage/themes/default/layouts/dashboard.php:48
        #: storage/themes/default/partials/sidebar_menu.php:182
        "Teams" => "",

        #: storage/themes/default/layouts/dashboard.php:91
        #: storage/themes/default/partials/footer.php:103
        #: storage/themes/the23/partials/footer.php:101
        "Report" => "",

        #: storage/themes/default/layouts/dashboard.php:96
        #: storage/themes/default/user/affiliate.php:80
        "Contact" => "",

        #: storage/themes/default/layouts/dashboard.php:126
        "The selected image is not valid. Please select a jpg or png with a maximum size of 1mb" => "",

        #: storage/themes/default/layouts/dashboard.php:129
        "This website uses cookies to ensure you get the best experience on our website." => "",

        #: storage/themes/default/layouts/dashboard.php:130
        "Got it!" => "",

        #: storage/themes/default/layouts/dashboard.php:131
        #: storage/themes/default/overlay/create_message.php:49
        #: storage/themes/default/overlay/create_message.php:121
        #: storage/themes/default/overlay/edit_message.php:49
        "Learn more" => "",

        #: storage/themes/default/layouts/dashboard.php:137
        #: storage/themes/default/qr/index.php:204
        #: storage/themes/default/user/index.php:240
        #: storage/themes/default/user/links.php:145
        "Are you sure you want to proceed?" => "",

        #: storage/themes/default/layouts/dashboard.php:138
        "Proceed" => "",

        #: storage/themes/default/layouts/dashboard.php:141
        "Note that this action is permanent. Once you click proceed, you <strong>may not undo</strong> this. Click anywhere outside this modal or click <a href='#close' class='close-modal'>close</a> to close this." => "",

        #: storage/themes/default/maintenance.php:8
        #: storage/themes/the23/maintenance.php:12
        "BRB" => "",

        #: storage/themes/default/overlay/create.php:40
        "What is a CTA overlay?" => "",

        #: storage/themes/default/overlay/create.php:44
        #: storage/themes/default/overlay/index.php:2
        "An overlay page allows you to display a small non-intrusive overlay on the destination website to advertise your product or your services. You can also use this feature to send a message to your users. You can customize the message and the appearance of the overlay right from this page. As soon as you save it, the changes will be applied immediately across all your URLs using this type. Please note that some secured and sensitive websites such as google.com or facebook.com do not work with this feature. You can have unlimited overlay pages and you can choose one for each URL." => "",

        #: storage/themes/default/overlay/create_contact.php:18
        #: storage/themes/default/overlay/edit_contact.php:18
        "Send Email Address" => "",

        #: storage/themes/default/overlay/create_contact.php:19
        #: storage/themes/default/overlay/edit_contact.php:19
        "Emails from the form will be sent to this address" => "",

        #: storage/themes/default/overlay/create_contact.php:26
        #: storage/themes/default/overlay/edit_contact.php:26
        "Email Subject" => "",

        #: storage/themes/default/overlay/create_contact.php:27
        #: storage/themes/default/overlay/edit_contact.php:27
        "Something you would know where it comes from." => "",

        #: storage/themes/default/overlay/create_contact.php:32
        #: storage/themes/default/overlay/create_contact.php:155
        #: storage/themes/default/overlay/create_newsletter.php:18
        #: storage/themes/default/overlay/edit_contact.php:32
        #: storage/themes/default/overlay/edit_newsletter.php:18
        "Form Label" => "",

        #: storage/themes/default/overlay/create_contact.php:32
        #: storage/themes/default/overlay/create_contact.php:40
        #: storage/themes/default/overlay/create_contact.php:46
        #: storage/themes/default/overlay/create_message.php:33
        #: storage/themes/default/overlay/create_message.php:41
        #: storage/themes/default/overlay/create_message.php:48
        #: storage/themes/default/overlay/create_newsletter.php:18
        #: storage/themes/default/overlay/create_newsletter.php:26
        #: storage/themes/default/overlay/create_newsletter.php:32
        #: storage/themes/default/overlay/create_poll.php:53
        #: storage/themes/default/overlay/edit_message.php:33
        #: storage/themes/default/overlay/edit_message.php:41
        #: storage/themes/default/overlay/edit_message.php:48
        #: storage/themes/default/overlay/edit_newsletter.php:18
        #: storage/themes/default/overlay/edit_newsletter.php:26
        #: storage/themes/default/overlay/edit_newsletter.php:32
        #: storage/themes/default/overlay/edit_poll.php:52
        "leave empty to disable" => "",

        #: storage/themes/default/overlay/create_contact.php:33
        #: storage/themes/default/overlay/create_newsletter.php:19
        #: storage/themes/default/overlay/edit_contact.php:33
        #: storage/themes/default/overlay/edit_newsletter.php:19
        "e.g. Need help?" => "",

        #: storage/themes/default/overlay/create_contact.php:40
        #: storage/themes/default/overlay/create_contact.php:156
        #: storage/themes/default/overlay/create_newsletter.php:26
        #: storage/themes/default/overlay/edit_contact.php:40
        #: storage/themes/default/overlay/edit_newsletter.php:26
        "Form Description" => "",

        #: storage/themes/default/overlay/create_contact.php:41
        #: storage/themes/default/overlay/create_newsletter.php:27
        #: storage/themes/default/overlay/edit_contact.php:41
        #: storage/themes/default/overlay/edit_newsletter.php:27
        "(optional) Provide a description or anything you want to add to the form." => "",

        #: storage/themes/default/overlay/create_contact.php:46
        #: storage/themes/default/overlay/create_newsletter.php:32
        #: storage/themes/default/overlay/create_poll.php:53
        #: storage/themes/default/overlay/edit_contact.php:46
        #: storage/themes/default/overlay/edit_newsletter.php:32
        #: storage/themes/default/overlay/edit_poll.php:52
        "Thank You Message" => "",

        #: storage/themes/default/overlay/create_contact.php:47
        #: storage/themes/default/overlay/edit_contact.php:47
        "e.g. Thank you. We will respond asap." => "",

        #: storage/themes/default/overlay/create_contact.php:55
        #: storage/themes/default/overlay/create_newsletter.php:47
        #: storage/themes/default/overlay/create_poll.php:41
        #: storage/themes/default/overlay/edit_contact.php:55
        #: storage/themes/default/overlay/edit_contact.php:58
        #: storage/themes/default/overlay/edit_newsletter.php:47
        #: storage/themes/default/overlay/edit_poll.php:40
        "Text Labels" => "",

        #: storage/themes/default/overlay/create_contact.php:61
        #: storage/themes/default/overlay/edit_contact.php:62
        "Name Placeholder" => "",

        #: storage/themes/default/overlay/create_contact.php:63
        #: storage/themes/default/overlay/create_contact.php:70
        #: storage/themes/default/overlay/create_contact.php:77
        #: storage/themes/default/overlay/create_contact.php:84
        #: storage/themes/default/overlay/create_newsletter.php:55
        #: storage/themes/default/overlay/edit_contact.php:64
        #: storage/themes/default/overlay/edit_contact.php:71
        #: storage/themes/default/overlay/edit_contact.php:78
        #: storage/themes/default/overlay/edit_contact.php:85
        #: storage/themes/default/overlay/edit_newsletter.php:55
        "If you want to use a different language, change these." => "",

        #: storage/themes/default/overlay/create_contact.php:68
        #: storage/themes/default/overlay/edit_contact.php:69
        "Email Placeholder" => "",

        #: storage/themes/default/overlay/create_contact.php:75
        #: storage/themes/default/overlay/edit_contact.php:76
        "Message Placeholder" => "",

        #: storage/themes/default/overlay/create_contact.php:82
        #: storage/themes/default/overlay/edit_contact.php:83
        "Send Button Placeholder" => "",

        #: storage/themes/default/overlay/create_contact.php:92
        #: storage/themes/default/overlay/create_coupon.php:43
        #: storage/themes/default/overlay/create_image.php:44
        #: storage/themes/default/overlay/create_message.php:57
        #: storage/themes/default/overlay/create_newsletter.php:63
        #: storage/themes/default/overlay/create_poll.php:62
        #: storage/themes/default/overlay/edit_contact.php:93
        #: storage/themes/default/overlay/edit_coupon.php:43
        #: storage/themes/default/overlay/edit_image.php:44
        #: storage/themes/default/overlay/edit_message.php:57
        #: storage/themes/default/overlay/edit_newsletter.php:63
        #: storage/themes/default/overlay/edit_poll.php:61
        "Appearance Customization" => "",

        #: storage/themes/default/overlay/create_contact.php:98
        #: storage/themes/default/overlay/edit_contact.php:99
        "Form Background Color" => "",

        #: storage/themes/default/overlay/create_contact.php:104
        #: storage/themes/default/overlay/edit_contact.php:105
        "Form Text Color" => "",

        #: storage/themes/default/overlay/create_contact.php:110
        #: storage/themes/default/overlay/edit_contact.php:111
        "Input Background Color" => "",

        #: storage/themes/default/overlay/create_contact.php:116
        #: storage/themes/default/overlay/edit_contact.php:117
        "Input Text Color" => "",

        #: storage/themes/default/overlay/create_contact.php:122
        #: storage/themes/default/overlay/create_coupon.php:61
        #: storage/themes/default/overlay/create_message.php:87
        #: storage/themes/default/overlay/create_newsletter.php:81
        #: storage/themes/default/overlay/create_poll.php:80
        #: storage/themes/default/overlay/edit_contact.php:123
        #: storage/themes/default/overlay/edit_coupon.php:61
        #: storage/themes/default/overlay/edit_message.php:87
        #: storage/themes/default/overlay/edit_newsletter.php:81
        #: storage/themes/default/overlay/edit_poll.php:79
        "Button Background Color" => "",

        #: storage/themes/default/overlay/create_contact.php:134
        #: storage/themes/default/overlay/create_coupon.php:73
        #: storage/themes/default/overlay/create_image.php:56
        #: storage/themes/default/overlay/create_message.php:99
        #: storage/themes/default/overlay/create_newsletter.php:93
        #: storage/themes/default/overlay/create_poll.php:92
        #: storage/themes/default/overlay/edit_contact.php:135
        #: storage/themes/default/overlay/edit_coupon.php:73
        #: storage/themes/default/overlay/edit_image.php:56
        #: storage/themes/default/overlay/edit_message.php:99
        #: storage/themes/default/overlay/edit_newsletter.php:93
        #: storage/themes/default/overlay/edit_poll.php:91
        "Overlay Position" => "",

        #: storage/themes/default/overlay/create_contact.php:136
        #: storage/themes/default/overlay/create_coupon.php:75
        #: storage/themes/default/overlay/create_image.php:60
        #: storage/themes/default/overlay/create_message.php:103
        #: storage/themes/default/overlay/create_newsletter.php:95
        #: storage/themes/default/overlay/create_poll.php:94
        #: storage/themes/default/overlay/edit_contact.php:137
        #: storage/themes/default/overlay/edit_coupon.php:75
        #: storage/themes/default/overlay/edit_image.php:60
        #: storage/themes/default/overlay/edit_message.php:103
        #: storage/themes/default/overlay/edit_newsletter.php:95
        #: storage/themes/default/overlay/edit_poll.php:93
        "Bottom Left" => "",

        #: storage/themes/default/overlay/create_contact.php:137
        #: storage/themes/default/overlay/create_coupon.php:76
        #: storage/themes/default/overlay/create_image.php:61
        #: storage/themes/default/overlay/create_message.php:104
        #: storage/themes/default/overlay/create_newsletter.php:96
        #: storage/themes/default/overlay/create_poll.php:95
        #: storage/themes/default/overlay/edit_contact.php:138
        #: storage/themes/default/overlay/edit_coupon.php:76
        #: storage/themes/default/overlay/edit_image.php:61
        #: storage/themes/default/overlay/edit_message.php:104
        #: storage/themes/default/overlay/edit_newsletter.php:96
        #: storage/themes/default/overlay/edit_poll.php:94
        "Bottom Right" => "",

        #: storage/themes/default/overlay/create_contact.php:142
        #: storage/themes/default/overlay/create_contact.php:174
        #: storage/themes/default/overlay/create_newsletter.php:39
        #: storage/themes/default/overlay/create_newsletter.php:121
        #: storage/themes/default/overlay/edit_contact.php:143
        #: storage/themes/default/overlay/edit_contact.php:175
        #: storage/themes/default/overlay/edit_newsletter.php:39
        #: storage/themes/default/overlay/edit_newsletter.php:130
        "Webhook Notification" => "",

        #: storage/themes/default/overlay/create_contact.php:144
        #: storage/themes/default/overlay/create_newsletter.php:41
        #: storage/themes/default/overlay/edit_contact.php:145
        #: storage/themes/default/overlay/edit_newsletter.php:41
        "If you want to receive a notification directly to your app, add the url to your app's handler and as soon as there is a submission, we will send a notification to this url as well as an email to the address provided above." => "",

        #: storage/themes/default/overlay/create_contact.php:177
        #: storage/themes/default/overlay/edit_contact.php:178
        "If you add a webhook url, we will send a notification to that url with the contact form data. You will be able to integrate it with your own app or a third-party app. Below is a sample data that will be sent in <code>JSON</code> format via a <code>POST</code> request." => "",

        #: storage/themes/default/overlay/create_coupon.php:18
        #: storage/themes/default/overlay/edit_coupon.php:18
        "Coupon Code" => "",

        #: storage/themes/default/overlay/create_coupon.php:27
        #: storage/themes/default/overlay/create_message.php:28
        #: storage/themes/default/overlay/edit_coupon.php:27
        #: storage/themes/default/overlay/edit_message.php:28
        #: storage/themes/default/splash/create.php:55
        #: storage/themes/default/splash/edit.php:61
        "Get a $10 discount with any purchase more than $50" => "",

        #: storage/themes/default/overlay/create_coupon.php:34
        #: storage/themes/default/overlay/create_message.php:48
        #: storage/themes/default/overlay/edit_coupon.php:34
        #: storage/themes/default/overlay/edit_message.php:48
        "Button Text" => "",

        #: storage/themes/default/overlay/create_coupon.php:49
        #: storage/themes/default/overlay/create_image.php:50
        #: storage/themes/default/overlay/create_message.php:63
        #: storage/themes/default/overlay/create_newsletter.php:69
        #: storage/themes/default/overlay/create_poll.php:68
        #: storage/themes/default/overlay/edit_coupon.php:49
        #: storage/themes/default/overlay/edit_image.php:50
        #: storage/themes/default/overlay/edit_message.php:63
        #: storage/themes/default/overlay/edit_newsletter.php:69
        #: storage/themes/default/overlay/edit_poll.php:67
        "Overlay Background Color" => "",

        #: storage/themes/default/overlay/create_coupon.php:55
        #: storage/themes/default/overlay/create_message.php:69
        #: storage/themes/default/overlay/create_newsletter.php:75
        #: storage/themes/default/overlay/create_poll.php:74
        #: storage/themes/default/overlay/edit_coupon.php:55
        #: storage/themes/default/overlay/edit_message.php:69
        #: storage/themes/default/overlay/edit_newsletter.php:75
        #: storage/themes/default/overlay/edit_poll.php:73
        "Overlay Text Color" => "",

        #: storage/themes/default/overlay/create_image.php:20
        #: storage/themes/default/overlay/edit_image.php:20
        "If you add a link here, the whole overlay will be linked to this when clicked." => "",

        #: storage/themes/default/overlay/create_image.php:27
        #: storage/themes/default/overlay/create_message.php:18
        #: storage/themes/default/overlay/edit_image.php:27
        #: storage/themes/default/overlay/edit_message.php:18
        #: storage/themes/default/pages/qr.php:253
        #: storage/themes/the23/pages/qr.php:254
        "Logo" => "",

        #: storage/themes/default/overlay/create_image.php:29
        #: storage/themes/default/overlay/create_message.php:20
        #: storage/themes/default/overlay/edit_image.php:29
        #: storage/themes/default/overlay/edit_message.php:20
        "Logo should be square with a maximum size of 100x100. To remove the image, click on the upload field and then cancel it." => "",

        #: storage/themes/default/overlay/create_image.php:34
        #: storage/themes/default/overlay/edit_image.php:34
        "Background Image" => "",

        #: storage/themes/default/overlay/create_image.php:36
        #: storage/themes/default/overlay/edit_image.php:36
        "Image should be rectangle with a maximum size of 600x150. To remove the image, click on the upload field and then cancel it." => "",

        #: storage/themes/default/overlay/create_image.php:58
        #: storage/themes/default/overlay/create_message.php:101
        #: storage/themes/default/overlay/edit_image.php:58
        #: storage/themes/default/overlay/edit_message.php:101
        "Top Left" => "",

        #: storage/themes/default/overlay/create_image.php:59
        #: storage/themes/default/overlay/create_message.php:102
        #: storage/themes/default/overlay/edit_image.php:59
        #: storage/themes/default/overlay/edit_message.php:102
        "Top Right" => "",

        #: storage/themes/default/overlay/create_image.php:62
        #: storage/themes/default/overlay/create_message.php:105
        #: storage/themes/default/overlay/edit_image.php:62
        #: storage/themes/default/overlay/edit_message.php:105
        "Bottom Center" => "",

        #: storage/themes/default/overlay/create_message.php:33
        #: storage/themes/default/overlay/edit_message.php:33
        "Overlay label" => "",

        #: storage/themes/default/overlay/create_message.php:41
        #: storage/themes/default/overlay/edit_message.php:41
        "Button Link" => "",

        #: storage/themes/default/overlay/create_message.php:43
        #: storage/themes/default/overlay/edit_message.php:43
        "If you remove the button text below but add a link here, the whole overlay will be linked to this when clicked." => "",

        #: storage/themes/default/overlay/create_message.php:75
        #: storage/themes/default/overlay/edit_message.php:75
        "Label Background Color" => "",

        #: storage/themes/default/overlay/create_message.php:81
        #: storage/themes/default/overlay/edit_message.php:81
        "Label Text Color" => "",

        #: storage/themes/default/overlay/create_message.php:116
        "Promo" => "",

        #: storage/themes/default/overlay/create_message.php:120
        "Your text here" => "",

        #: storage/themes/default/overlay/create_newsletter.php:33
        #: storage/themes/default/overlay/edit_newsletter.php:33
        "e.g. Thank you." => "",

        #: storage/themes/default/overlay/create_newsletter.php:53
        #: storage/themes/default/overlay/edit_newsletter.php:53
        "Button" => "",

        #: storage/themes/default/overlay/create_newsletter.php:124
        #: storage/themes/default/overlay/edit_newsletter.php:133
        "If you add a webhook url, we will send a notification to that url with the form data. You will be able to integrate it with your own app or a third-party app. Below is a sample data that will be sent in <code>JSON</code> format via a <code>POST</code> request." => "",

        #: storage/themes/default/overlay/create_poll.php:21
        #: storage/themes/default/overlay/edit_poll.php:21
        "e.g. What is your favorite color?" => "",

        #: storage/themes/default/overlay/create_poll.php:26
        #: storage/themes/default/overlay/edit_poll.php:26
        "Options" => "",

        #: storage/themes/default/overlay/create_poll.php:27
        #: storage/themes/default/overlay/edit_poll.php:27
        "You can add up to 10 options for each poll. To add an extra option click Add Option above. To ignore a field, leave it empty." => "",

        #: storage/themes/default/overlay/create_poll.php:36
        #: storage/themes/default/overlay/edit_poll.php:35
        "Add Option" => "",

        #: storage/themes/default/overlay/create_poll.php:47
        #: storage/themes/default/overlay/edit_poll.php:46
        "Vote Button Placeholder" => "",

        #: storage/themes/default/overlay/create_poll.php:54
        "Thanks..." => "",

        #: storage/themes/default/overlay/create_poll.php:106
        "Your question here?" => "",

        #: storage/themes/default/overlay/edit_contact.php:32
        #: storage/themes/default/overlay/edit_contact.php:40
        #: storage/themes/default/overlay/edit_contact.php:46
        "(leave empty to disable)" => "",

        #: storage/themes/default/overlay/edit_contact.php:149
        #: storage/themes/default/overlay/edit_coupon.php:81
        #: storage/themes/default/overlay/edit_image.php:67
        #: storage/themes/default/overlay/edit_message.php:110
        #: storage/themes/default/overlay/edit_newsletter.php:101
        #: storage/themes/default/overlay/edit_poll.php:99
        #: storage/themes/default/qr/edit.php:786
        #: storage/themes/default/splash/edit.php:64
        #: storage/themes/default/teams/edit.php:75
        #: storage/themes/default/user/channel.php:113
        #: storage/themes/default/user/channels.php:155
        "Update" => "",

        #: storage/themes/default/overlay/edit_poll.php:116
        "Poll Results" => "",

        #: storage/themes/default/pages/affiliate.php:6
        #: storage/themes/the23/pages/affiliate.php:5
        "Earn {p} commission on affiliate sales" => "",

        #: storage/themes/default/pages/affiliate.php:7
        #: storage/themes/the23/pages/affiliate.php:6
        "Refer customers to us and we will reward you a {p} commission on all qualifying sales made on our website. Anyone can join the affiliate program." => "",

        #: storage/themes/default/pages/affiliate.php:9
        #: storage/themes/the23/pages/affiliate.php:8
        "View Affiliate Portal" => "",

        #: storage/themes/default/pages/affiliate.php:11
        #: storage/themes/the23/pages/affiliate.php:10
        "Join now" => "",

        #: storage/themes/default/pages/affiliate.php:22
        #: storage/themes/default/pricing/index.php:65
        #: storage/themes/the23/pages/affiliate.php:17
        #: storage/themes/the23/pricing/index.php:58
        "Frequently Asked Questions" => "",

        #: storage/themes/default/pages/api.php:8
        #: storage/themes/default/pages/api.php:51 storage/themes/the23/pages/api.php:7
        #: storage/themes/the23/pages/api.php:42
        "Getting Started" => "",

        #: storage/themes/default/pages/api.php:14
        #: storage/themes/default/pages/api.php:72
        #: storage/themes/the23/pages/api.php:10 storage/themes/the23/pages/api.php:63
        "Authentication" => "",

        #: storage/themes/default/pages/api.php:20
        #: storage/themes/default/pages/api.php:131
        #: storage/themes/the23/pages/api.php:13 storage/themes/the23/pages/api.php:124
        "Rate Limit" => "",

        #: storage/themes/default/pages/api.php:26
        #: storage/themes/default/pages/api.php:148
        #: storage/themes/the23/pages/api.php:16 storage/themes/the23/pages/api.php:141
        "Response Handling" => "",

        #: storage/themes/default/pages/api.php:31
        #: storage/themes/default/partials/topbar_menu.php:60
        #: storage/themes/the23/pages/api.php:23
        "Admin" => "",

        #: storage/themes/default/pages/api.php:54
        #: storage/themes/the23/pages/api.php:45
        "An API key is required for requests to be processed by the system. Once a user registers, an API key is automatically generated for this user. The API key must be sent with each request (see full example below). If the API key is not sent or is expired, there will be an error. Please make sure to keep your API key secret to prevent abuse." => "",

        #: storage/themes/default/pages/api.php:60
        #: storage/themes/the23/pages/api.php:51
        "Your API key" => "",

        #: storage/themes/default/pages/api.php:62
        #: storage/themes/the23/pages/api.php:53
        "Regenerate API Key" => "",

        #: storage/themes/default/pages/api.php:62
        #: storage/themes/the23/pages/api.php:53
        "If you proceed, your current applications will not work anymore. You will need to change your api key for it to work again." => "",

        #: storage/themes/default/pages/api.php:62
        #: storage/themes/default/user/settings.php:234
        #: storage/themes/default/user/settings.php:287
        #: storage/themes/the23/pages/api.php:53
        "Regenerate" => "",

        #: storage/themes/default/pages/api.php:75
        #: storage/themes/the23/pages/api.php:66
        "To authenticate with the API system, you need to send your API key as an authorization token with each request. You can see sample code below." => "",

        #: storage/themes/default/pages/api.php:134
        #: storage/themes/the23/pages/api.php:127
        "Our API has a rate limiter to safeguard against spike in requests to maximize its stability. Our rate limiter is currently caped at {x} requests per {y} minute." => "",

        #: storage/themes/default/pages/api.php:136
        #: storage/themes/the23/pages/api.php:129
        "Several headers will be sent alongside the response and these can be examined to determine various information about the request." => "",

        #: storage/themes/default/pages/api.php:151
        #: storage/themes/the23/pages/api.php:144
        "All API response are returned in JSON format by default. To convert this into usable data, the appropriate function will need to be used according to the language. In PHP, the function json_decode() can be used to convert the data to either an object (default) or an array (set the second parameter to true). It is very important to check the error key as that provides information on whether there was an error or not. You can also check the header code." => "",

        #: storage/themes/default/pages/api.php:179
        #: storage/themes/the23/pages/api.php:174
        "Parameter" => "",

        #: storage/themes/default/pages/api.php:252
        #: storage/themes/the23/pages/api.php:250
        "Server response" => "",

        #: storage/themes/default/pages/bio.php:26
        #: storage/themes/the23/pages/bio.php:30
        "New Merch" => "",

        #: storage/themes/default/pages/bio.php:29
        #: storage/themes/the23/pages/bio.php:33
        "Shop" => "",

        #: storage/themes/default/pages/bio.php:42
        #: storage/themes/the23/pages/bio.php:45
        "One link to rule them all" => "",

        #: storage/themes/default/pages/bio.php:44
        #: storage/themes/the23/pages/bio.php:47
        "Create beautiful profiles and add content like links, donation, videos and more for your social media users. Share a single on your social media profiles so your users can easily find all of your important links on a single page." => "",

        #: storage/themes/default/pages/bio.php:51
        #: storage/themes/default/pages/qr.php:359
        #: storage/themes/default/pages/qr.php:422
        #: storage/themes/the23/pages/qr.php:359
        "The new standard" => "",

        #: storage/themes/default/pages/bio.php:60
        "Track and optimize" => "",

        #: storage/themes/default/pages/bio.php:62
        #: storage/themes/the23/pages/bio.php:146
        "Profiles are fully trackable and you can find out exactly how many people have visited your profiles or clicked links on your profile and where they are from." => "",

        #: storage/themes/default/pages/bio.php:69
        #: storage/themes/default/pages/qr.php:431
        #: storage/themes/default/pages/qr.php:440
        #: storage/themes/the23/pages/bio.php:144
        #: storage/themes/the23/pages/bio.php:151 storage/themes/the23/pages/qr.php:465
        #: storage/themes/the23/pages/qr.php:472
        "Trackable to the dot" => "",

        #: storage/themes/default/pages/consent.php:9
        #: storage/themes/the23/pages/consent.php:8
        "This website uses cookies to ensure you get the best experience on our website. You can learn more by visiting our cookie policy. Meanwhile if you agree, please click the button below to proceed to your destination." => "",

        #: storage/themes/default/pages/contact.php:7
        #: storage/themes/default/pages/contact.php:30
        #: storage/themes/the23/pages/contact.php:58
        "If you have any questions, feel free to contact us so we can help you" => "",

        #: storage/themes/default/pages/contact.php:22
        "Please enter a valid name." => "",

        #: storage/themes/default/pages/contact.php:30
        "The message is empty or too short." => "",

        #: storage/themes/default/pages/index.php:14
        "Last Updated" => "",

        #: storage/themes/default/pages/qr.php:7 storage/themes/the23/pages/qr.php:8
        "Create QR Codes <br>for {t}" => "",

        #: storage/themes/default/pages/qr.php:17 storage/themes/the23/pages/qr.php:18
        "Static" => "",

        #: storage/themes/default/pages/qr.php:19
        #: storage/themes/default/pages/qr.php:231
        #: storage/themes/default/pages/qr.php:256
        #: storage/themes/default/pages/qr.php:263
        #: storage/themes/default/pages/qr.php:266
        #: storage/themes/default/pages/qr.php:269 storage/themes/the23/pages/qr.php:20
        #: storage/themes/the23/pages/qr.php:232 storage/themes/the23/pages/qr.php:257
        #: storage/themes/the23/pages/qr.php:264 storage/themes/the23/pages/qr.php:267
        #: storage/themes/the23/pages/qr.php:270
        "Register to unlock this feature" => "",

        #: storage/themes/default/pages/qr.php:20 storage/themes/the23/pages/qr.php:21
        "Dynamic" => "",

        #: storage/themes/default/pages/qr.php:20 storage/themes/the23/pages/qr.php:21
        "Trackable" => "",

        #: storage/themes/default/pages/qr.php:25
        #: storage/themes/default/pages/qr.php:45
        #: storage/themes/default/pages/qr.php:200
        #: storage/themes/default/qr/edit.php:390 storage/themes/default/qr/new.php:365
        #: storage/themes/default/user/edit.php:20 storage/themes/the23/pages/qr.php:26
        #: storage/themes/the23/pages/qr.php:46 storage/themes/the23/pages/qr.php:201
        "URL" => "",

        #: storage/themes/default/pages/qr.php:27
        #: storage/themes/default/qr/edit.php:108 storage/themes/default/qr/new.php:36
        #: storage/themes/default/qr/new.php:114 storage/themes/the23/pages/qr.php:28
        "SMS" => "",

        #: storage/themes/default/pages/qr.php:28 storage/themes/the23/pages/qr.php:29
        "Call" => "",

        #: storage/themes/default/pages/qr.php:29
        #: storage/themes/default/qr/edit.php:308 storage/themes/default/qr/new.php:28
        #: storage/themes/default/qr/new.php:327 storage/themes/the23/pages/qr.php:30
        "WiFi" => "",

        #: storage/themes/default/pages/qr.php:31
        #: storage/themes/default/qr/edit.php:374 storage/themes/default/qr/new.php:30
        #: storage/themes/default/qr/new.php:349 storage/themes/the23/pages/qr.php:32
        "Event" => "",

        #: storage/themes/default/pages/qr.php:38 storage/themes/default/qr/edit.php:35
        #: storage/themes/default/qr/edit.php:36 storage/themes/default/qr/edit.php:134
        #: storage/themes/default/qr/new.php:51 storage/themes/default/qr/new.php:52
        #: storage/themes/the23/pages/qr.php:39
        "Your Text" => "",

        #: storage/themes/default/pages/qr.php:57 storage/themes/default/qr/edit.php:65
        #: storage/themes/default/qr/new.php:77 storage/themes/the23/pages/qr.php:58
        "Subject" => "",

        #: storage/themes/default/pages/qr.php:58
        #: storage/themes/default/pages/qr.php:82 storage/themes/default/qr/edit.php:66
        #: storage/themes/default/qr/edit.php:117 storage/themes/default/qr/new.php:78
        #: storage/themes/default/qr/new.php:108 storage/themes/default/qr/new.php:123
        #: storage/themes/the23/pages/qr.php:59 storage/themes/the23/pages/qr.php:83
        "Job Application" => "",

        #: storage/themes/default/pages/qr.php:62 storage/themes/default/qr/edit.php:70
        #: storage/themes/default/qr/new.php:82 storage/themes/default/qr/new.php:151
        #: storage/themes/the23/pages/qr.php:63
        "Your message here to be sent as email" => "",

        #: storage/themes/default/pages/qr.php:69
        #: storage/themes/default/pages/qr.php:77 storage/themes/default/qr/edit.php:82
        #: storage/themes/default/qr/edit.php:95 storage/themes/default/qr/edit.php:112
        #: storage/themes/default/qr/edit.php:129 storage/themes/default/qr/new.php:92
        #: storage/themes/default/qr/new.php:103 storage/themes/default/qr/new.php:118
        #: storage/themes/default/qr/new.php:146 storage/themes/the23/pages/qr.php:70
        #: storage/themes/the23/pages/qr.php:78
        "Phone Number" => "",

        #: storage/themes/default/pages/qr.php:97
        #: storage/themes/default/qr/edit.php:154
        #: storage/themes/default/qr/edit.php:241 storage/themes/default/qr/new.php:169
        #: storage/themes/default/qr/new.php:254 storage/themes/the23/pages/qr.php:98
        "Organization" => "",

        #: storage/themes/default/pages/qr.php:105
        #: storage/themes/default/qr/edit.php:162 storage/themes/default/qr/new.php:177
        #: storage/themes/default/qr/new.php:262 storage/themes/the23/pages/qr.php:106
        "Cell" => "",

        #: storage/themes/default/pages/qr.php:117
        #: storage/themes/default/qr/edit.php:174
        #: storage/themes/default/qr/edit.php:253 storage/themes/default/qr/new.php:189
        #: storage/themes/default/qr/new.php:274 storage/themes/the23/pages/qr.php:118
        "Website" => "",

        #: storage/themes/default/pages/qr.php:122
        #: storage/themes/default/qr/edit.php:179
        #: storage/themes/default/qr/edit.php:258 storage/themes/default/qr/new.php:194
        #: storage/themes/default/qr/new.php:279 storage/themes/the23/pages/qr.php:123
        "Social" => "",

        #: storage/themes/default/pages/qr.php:126
        #: storage/themes/default/qr/edit.php:184
        #: storage/themes/default/qr/edit.php:263 storage/themes/default/qr/new.php:199
        #: storage/themes/default/qr/new.php:284 storage/themes/the23/pages/qr.php:127
        "Street" => "",

        #: storage/themes/default/pages/qr.php:134
        #: storage/themes/default/qr/edit.php:192
        #: storage/themes/default/qr/edit.php:271 storage/themes/default/qr/new.php:207
        #: storage/themes/default/qr/new.php:292 storage/themes/the23/pages/qr.php:135
        "State" => "",

        #: storage/themes/default/pages/qr.php:138
        #: storage/themes/default/qr/edit.php:196
        #: storage/themes/default/qr/edit.php:275 storage/themes/default/qr/new.php:211
        #: storage/themes/default/qr/new.php:296 storage/themes/the23/pages/qr.php:139
        "Zipcode" => "",

        #: storage/themes/default/pages/qr.php:160
        #: storage/themes/default/qr/edit.php:219
        #: storage/themes/default/qr/edit.php:298 storage/themes/default/qr/new.php:234
        #: storage/themes/default/qr/new.php:319 storage/themes/the23/pages/qr.php:161
        "Linekdin" => "",

        #: storage/themes/default/pages/qr.php:169
        #: storage/themes/default/qr/edit.php:312 storage/themes/default/qr/new.php:331
        #: storage/themes/the23/pages/qr.php:170
        "Network SSID" => "",

        #: storage/themes/default/pages/qr.php:177
        #: storage/themes/default/qr/edit.php:320 storage/themes/default/qr/new.php:339
        #: storage/themes/the23/pages/qr.php:178
        "Encryption" => "",

        #: storage/themes/default/pages/qr.php:188
        #: storage/themes/default/qr/edit.php:378 storage/themes/default/qr/new.php:353
        #: storage/themes/the23/pages/qr.php:189
        "Title" => "",

        #: storage/themes/default/pages/qr.php:196
        #: storage/themes/default/qr/edit.php:386 storage/themes/default/qr/new.php:361
        #: storage/themes/the23/pages/qr.php:197
        "Location" => "",

        #: storage/themes/default/pages/qr.php:222
        #: storage/themes/the23/pages/qr.php:223
        "Customization" => "",

        #: storage/themes/default/pages/qr.php:232
        #: storage/themes/the23/pages/qr.php:233
        "Gradient" => "",

        #: storage/themes/default/pages/qr.php:245
        #: storage/themes/default/qr/bulk.php:71 storage/themes/default/qr/edit.php:452
        #: storage/themes/default/qr/new.php:450 storage/themes/the23/pages/qr.php:246
        "Foreground" => "",

        #: storage/themes/default/pages/qr.php:255
        #: storage/themes/the23/pages/qr.php:256
        "Upload logo" => "",

        #: storage/themes/default/pages/qr.php:261
        #: storage/themes/default/qr/bulk.php:125
        #: storage/themes/default/qr/edit.php:506 storage/themes/default/qr/new.php:504
        #: storage/themes/the23/pages/qr.php:262
        "Design" => "",

        #: storage/themes/default/pages/qr.php:264
        #: storage/themes/the23/pages/qr.php:265
        "Eye" => "",

        #: storage/themes/default/pages/qr.php:267
        #: storage/themes/the23/pages/qr.php:268
        "Matrix" => "",

        #: storage/themes/default/pages/qr.php:277
        #: storage/themes/the23/pages/qr.php:278
        "Generate" => "",

        #: storage/themes/default/pages/qr.php:290
        #: storage/themes/the23/pages/qr.php:291
        "Register to unlock advanced features such as Dynamic QR Codes, advanced QR Code customization and frames." => "",

        #: storage/themes/default/pages/qr.php:318
        #: storage/themes/the23/pages/qr.php:319
        "Advanced QR Codes" => "",

        #: storage/themes/default/pages/qr.php:326
        #: storage/themes/the23/pages/qr.php:327
        "Customize Colors" => "",

        #: storage/themes/default/pages/qr.php:336
        #: storage/themes/the23/pages/qr.php:337
        "Track Scans" => "",

        #: storage/themes/default/pages/qr.php:344
        #: storage/themes/the23/pages/qr.php:345
        "Customize Design & Frames" => "",

        #: storage/themes/default/pages/qr.php:361
        #: storage/themes/the23/pages/qr.php:361
        "QR Codes are everywhere and they are not going away. They are a great asset to your company because you can easily capture users and convert them. QR codes can be customized to match your company, brand or product." => "",

        #: storage/themes/default/pages/qr.php:372
        #: storage/themes/the23/pages/qr.php:372
        "Dynamic QR codes" => "",

        #: storage/themes/default/pages/qr.php:373
        #: storage/themes/the23/pages/qr.php:373
        "Track QR code scans with our dynamic QR codes" => "",

        #: storage/themes/default/pages/qr.php:385
        #: storage/themes/the23/pages/bio.php:71 storage/themes/the23/pages/qr.php:385
        "Customizable Design" => "",

        #: storage/themes/default/pages/qr.php:386
        #: storage/themes/the23/pages/qr.php:386
        "Customize the eye & the matrix" => "",

        #: storage/themes/default/pages/qr.php:398
        #: storage/themes/the23/pages/qr.php:398
        "Frames & Custom Logo" => "",

        #: storage/themes/default/pages/qr.php:399
        #: storage/themes/the23/pages/qr.php:399
        "Add your own logo and frame your QR code" => "",

        #: storage/themes/default/pages/qr.php:411
        #: storage/themes/the23/pages/qr.php:411
        "Custom Colors" => "",

        #: storage/themes/default/pages/qr.php:412
        #: storage/themes/the23/pages/qr.php:412
        "Customize colors to match your brand" => "",

        #: storage/themes/default/pages/qr.php:433
        #: storage/themes/the23/pages/qr.php:467
        "The beautify of QR codes is that almost any type of data can be encoded in them. Most types of data can be tracked very easily so you will know exactly when and from where a person scanned your QR code." => "",

        #: storage/themes/default/pages/report.php:6
        #: storage/themes/the23/pages/report.php:5
        "Report link" => "",

        #: storage/themes/default/pages/report.php:26
        #: storage/themes/the23/pages/report.php:18
        "Please enter a valid short link" => "",

        #: storage/themes/default/pages/report.php:29
        #: storage/themes/the23/pages/report.php:21
        "Reason" => "",

        #: storage/themes/default/pages/report.php:31
        #: storage/themes/the23/pages/report.php:23
        "Spam" => "",

        #: storage/themes/default/pages/report.php:32
        #: storage/themes/the23/pages/report.php:24
        "Fraudulent" => "",

        #: storage/themes/default/pages/report.php:33
        #: storage/themes/the23/pages/report.php:25
        "Malicious" => "",

        #: storage/themes/default/pages/report.php:34
        #: storage/themes/the23/pages/report.php:26
        "Phishing" => "",

        #: storage/themes/default/partials/footer.php:8
        "Marketing with confidence." => "",

        #: storage/themes/default/partials/footer.php:57
        #: storage/themes/default/partials/main_menu.php:11
        #: storage/themes/default/partials/main_menu.php:54
        #: storage/themes/the23/partials/footer.php:49
        #: storage/themes/the23/partials/main_menu.php:27
        "Solutions" => "",

        #: storage/themes/default/partials/footer.php:60
        #: storage/themes/default/user/confirmation.php:77
        "Bio Profiles" => "",

        #: storage/themes/default/partials/footer.php:106
        #: storage/themes/the23/partials/footer.php:104
        "Cookie Settings" => "",

        #: storage/themes/default/partials/links.php:9
        "More Info" => "",

        #: storage/themes/default/partials/links.php:14
        "Unarchive" => "",

        #: storage/themes/default/partials/links.php:16
        "Archive" => "",

        #: storage/themes/default/partials/links.php:19
        "Set Private" => "",

        #: storage/themes/default/partials/links.php:21
        "Set Public" => "",

        #: storage/themes/default/partials/links.php:28
        #: storage/themes/default/user/edit.php:10
        "Export Statistics" => "",

        #: storage/themes/default/partials/links.php:48
        "Archived" => "",

        #: storage/themes/default/partials/links.php:56
        "Public" => "",

        #: storage/themes/default/partials/links.php:59
        #: storage/themes/default/user/edit.php:471
        "Campaign" => "",

        #: storage/themes/default/partials/links.php:62
        "Geo Targeted" => "",

        #: storage/themes/default/partials/links.php:65
        "Device Targeted" => "",

        #: storage/themes/default/partials/links.php:68
        "Language Targeted" => "",

        #: storage/themes/default/partials/links.php:71
        #: storage/themes/default/partials/shortener.php:136
        #: storage/themes/default/partials/stats_nav.php:21
        #: storage/themes/the23/partials/stats_nav.php:21
        "A/B Testing" => "",

        #: storage/themes/default/partials/links.php:74
        #: storage/themes/default/partials/shortener.php:322
        "Click Limit" => "",

        #: storage/themes/default/partials/links.php:80
        "Protected" => "",

        #: storage/themes/default/partials/links.php:83
        "Expiry on" => "",

        #: storage/themes/default/partials/links.php:86
        #: storage/themes/default/partials/shortener.php:130
        #: storage/themes/default/pixels/index.php:14
        #: storage/themes/default/user/index.php:338
        #: storage/themes/default/user/links.php:287
        "Pixels" => "",

        #: storage/themes/default/partials/links.php:97
        #: storage/themes/default/user/channel.php:44
        "Copied" => "",

        #: storage/themes/default/partials/links.php:102
        #: storage/themes/default/stats/partial.php:45
        "Unique Clicks" => "",

        #: storage/themes/default/partials/main_menu.php:7
        #: storage/themes/the23/partials/main_menu.php:90
        "Pricing" => "",

        #: storage/themes/default/partials/main_menu.php:17
        #: storage/themes/the23/partials/footer.php:66
        #: storage/themes/the23/partials/main_menu.php:111
        "Resources" => "",

        #: storage/themes/default/partials/main_menu.php:28
        #: storage/themes/the23/partials/main_menu.php:135
        "Guide on how to use our API" => "",

        #: storage/themes/default/partials/main_menu.php:61
        #: storage/themes/the23/partials/main_menu.php:48
        "Customizable & trackable QR codes" => "",

        #: storage/themes/default/partials/main_menu.php:69
        #: storage/themes/the23/partials/main_menu.php:37
        "Convert your social media followers" => "",

        #: storage/themes/default/partials/main_menu.php:136
        #: storage/themes/default/partials/topbar_menu.php:59
        #: storage/themes/the23/partials/main_menu.php:176
        "Admin Panel" => "",

        #: storage/themes/default/partials/main_menu.php:150
        #: storage/themes/default/partials/topbar_menu.php:103
        #: storage/themes/default/user/campaigns.php:20
        #: storage/themes/default/user/settings.php:166
        #: storage/themes/the23/partials/main_menu.php:186
        "Public Profile" => "",

        #: storage/themes/default/partials/main_menu.php:156
        #: storage/themes/default/partials/topbar_menu.php:109
        #: storage/themes/default/user/affiliate.php:1
        #: storage/themes/the23/partials/main_menu.php:193
        "Affiliate" => "",

        #: storage/themes/default/partials/main_menu.php:165
        #: storage/themes/default/partials/topbar_menu.php:123
        #: storage/themes/the23/partials/main_menu.php:216
        "Log out" => "",

        #: storage/themes/default/partials/shortener.php:7
        #: storage/themes/default/partials/shortenermodal.php:14
        "Paste a long link" => "",

        #: storage/themes/default/partials/shortener.php:10
        "Paste up to 10 long urls. One URL per line." => "",

        #: storage/themes/default/partials/shortener.php:26
        "Single" => "",

        #: storage/themes/default/partials/shortener.php:27
        "Multiple" => "",

        #: storage/themes/default/partials/shortener.php:47
        #: storage/themes/default/partials/shortenermodal.php:44
        #: storage/themes/default/user/edit.php:426
        #: storage/themes/default/user/import.php:39
        "Redirect" => "",

        #: storage/themes/default/partials/shortener.php:66
        #: storage/themes/default/partials/shortenermodal.php:63
        "If you need a custom alias, you can enter it below." => "",

        #: storage/themes/default/partials/shortener.php:78
        #: storage/themes/default/partials/shortenermodal.php:75
        "Assign link to a channel." => "",

        #: storage/themes/default/partials/shortener.php:95
        #: storage/themes/default/partials/shortenermodal.php:92
        "By adding a password, you can restrict the access." => "",

        #: storage/themes/default/partials/shortener.php:105
        #: storage/themes/default/partials/shortenermodal.php:102
        "This can be used to identify URLs on your account." => "",

        #: storage/themes/default/partials/shortener.php:108
        #: storage/themes/default/partials/shortenermodal.php:105
        #: storage/themes/default/user/edit.php:467
        "Type your description here" => "",

        #: storage/themes/default/partials/shortener.php:116
        #: storage/themes/default/partials/shortener.php:144
        #: storage/themes/default/user/edit.php:27
        "Meta Tags" => "",

        #: storage/themes/default/partials/shortener.php:148
        #: storage/themes/default/user/edit.php:31
        "Custom Banner" => "",

        #: storage/themes/default/partials/shortener.php:149
        #: storage/themes/default/partials/shortener.php:155
        #: storage/themes/default/user/edit.php:32
        #: storage/themes/default/user/edit.php:38
        "Enter your custom meta title" => "",

        #: storage/themes/default/partials/shortener.php:161
        #: storage/themes/default/user/edit.php:44
        "Enter your custom meta description" => "",

        #: storage/themes/default/partials/shortener.php:171
        #: storage/themes/default/partials/shortener.php:231
        #: storage/themes/default/partials/shortener.php:260
        #: storage/themes/default/partials/shortener.php:347
        #: storage/themes/default/partials/shortener.php:374
        #: storage/themes/default/user/edit.php:54
        #: storage/themes/default/user/edit.php:145
        #: storage/themes/default/user/edit.php:193
        #: storage/themes/default/user/edit.php:281
        #: storage/themes/default/user/edit.php:343
        "+ Add" => "",

        #: storage/themes/default/partials/shortener.php:174
        #: storage/themes/default/user/edit.php:57
        "If you have different pages for different countries then it is possible to redirect users to that page using the same URL. Simply choose the country and enter the URL." => "",

        #: storage/themes/default/partials/shortener.php:188
        #: storage/themes/default/user/edit.php:73
        #: storage/themes/default/user/edit.php:102
        "All States" => "",

        #: storage/themes/default/partials/shortener.php:198
        #: storage/themes/default/partials/shortener.php:249
        #: storage/themes/default/partials/shortener.php:276
        #: storage/themes/default/partials/shortener.php:337
        #: storage/themes/default/partials/shortener.php:357
        #: storage/themes/default/user/edit.php:83
        #: storage/themes/default/user/edit.php:112
        #: storage/themes/default/user/edit.php:164
        #: storage/themes/default/user/edit.php:182
        #: storage/themes/default/user/edit.php:212
        #: storage/themes/default/user/edit.php:230
        #: storage/themes/default/user/edit.php:271
        #: storage/themes/default/user/edit.php:292
        #: storage/themes/default/user/edit.php:308
        "Type the url to redirect user to." => "",

        #: storage/themes/default/partials/shortener.php:209
        #: storage/themes/default/user/edit.php:123
        "Enable this feature to force apps to open when visiting on mobile or open app store if app is not installed." => "",

        #: storage/themes/default/partials/shortener.php:216
        #: storage/themes/default/user/edit.php:130
        "To use deep links, you will need to define a main URL that will be used for all other devices, an app specific URL for iPhone/iPad and/or Android and the associated app store URL." => "",

        #: storage/themes/default/partials/shortener.php:216
        "You need to use the Device Targeting to set the correct app links for the associated devices" => "",

        #: storage/themes/default/partials/shortener.php:217
        #: storage/themes/default/qr/edit.php:415 storage/themes/default/qr/new.php:413
        #: storage/themes/default/user/edit.php:131
        "Link to App Store" => "",

        #: storage/themes/default/partials/shortener.php:221
        #: storage/themes/default/qr/edit.php:419 storage/themes/default/qr/new.php:417
        #: storage/themes/default/user/edit.php:135
        "Link to Google Play" => "",

        #: storage/themes/default/partials/shortener.php:235
        #: storage/themes/default/user/edit.php:149
        "If you have different pages for different devices (such as mobile, tablet etc) then it is possible to redirect users to that page using the same short URL. Simply choose the device and enter the URL." => "",

        #: storage/themes/default/partials/shortener.php:263
        "If you have different pages for different languages then it is possible to redirect users to that page using the same URL. Simply choose the language and enter the URL." => "",

        #: storage/themes/default/partials/shortener.php:306
        #: storage/themes/default/user/edit.php:242
        "Links can be expired based on the amount of clicks or a specific date. You can also set a url to redirect to when the link expires." => "",

        #: storage/themes/default/partials/shortener.php:311
        #: storage/themes/default/user/edit.php:247
        "Link Expiration" => "",

        #: storage/themes/default/partials/shortener.php:312
        "Set an expiration date to disable the link." => "",

        #: storage/themes/default/partials/shortener.php:315
        #: storage/themes/default/user/edit.php:250
        "MM/DD/YYYY" => "",

        #: storage/themes/default/partials/shortener.php:323
        "Limit the number of clicks." => "",

        #: storage/themes/default/partials/shortener.php:333
        #: storage/themes/default/user/edit.php:267
        "Expiration Redirect" => "",

        #: storage/themes/default/partials/shortener.php:334
        #: storage/themes/default/user/edit.php:268
        "Set a link to redirect traffic to when the short link expires." => "",

        #: storage/themes/default/partials/shortener.php:351
        #, no-php-format
        "You can rotate multiple links using this feature. If you do not assign a percentage or the percentage is 100% for all links then the traffic will equally distributed. Please note that default link will be added to the list as well and rotator will not work if you assign another targeting condition that matches." => "",

        #: storage/themes/default/partials/shortener.php:363
        #: storage/themes/default/user/edit.php:298
        #: storage/themes/default/user/edit.php:314
        "Type percentage e.g. 100" => "",

        #: storage/themes/default/partials/shortener.php:372
        #: storage/themes/default/user/edit.php:341
        "Parameter Builder" => "",

        #: storage/themes/default/partials/shortener.php:378
        #: storage/themes/default/user/edit.php:347
        "You can add custom parameters like UTM to the link above using this tool. Choose the parameter name and then assign a value. These will be added during redirection." => "",

        #: storage/themes/default/partials/shortener.php:384
        #: storage/themes/default/user/edit.php:354
        #: storage/themes/default/user/edit.php:370
        "Parameter name" => "",

        #: storage/themes/default/partials/shortener.php:390
        #: storage/themes/default/user/edit.php:360
        #: storage/themes/default/user/edit.php:376
        "Parameter value" => "",

        #: storage/themes/default/partials/shortenermodal.php:5
        #: storage/themes/default/partials/topbar_menu.php:7
        #: storage/themes/default/user/tools.php:7
        #: storage/themes/default/user/tools.php:16
        "Quick Shortener" => "",

        #: storage/themes/default/partials/sidebar_menu.php:24
        #: storage/themes/default/partials/topbar_menu.php:67
        #: storage/themes/default/partials/topbar_menu.php:71
        "Switch Workspace" => "",

        #: storage/themes/default/partials/sidebar_menu.php:30
        #: storage/themes/default/partials/topbar_menu.php:76
        "Individual" => "",

        #: storage/themes/default/partials/sidebar_menu.php:37
        #: storage/themes/default/partials/topbar_menu.php:83
        "Team" => "",

        #: storage/themes/default/partials/sidebar_menu.php:100
        #: storage/themes/default/user/channels.php:50
        "My Channels" => "",

        #: storage/themes/default/partials/stats_nav.php:3
        #: storage/themes/default/pricing/checkout.php:103
        #: storage/themes/the23/partials/stats_nav.php:3
        "Summary" => "",

        #: storage/themes/default/partials/stats_nav.php:6
        #: storage/themes/the23/partials/stats_nav.php:6
        "Countries & Cities" => "",

        #: storage/themes/default/partials/stats_nav.php:9
        #: storage/themes/default/stats/platforms.php:9
        #: storage/themes/default/user/campaignstats.php:85
        #: storage/themes/the23/partials/stats_nav.php:9
        "Platforms" => "",

        #: storage/themes/default/partials/stats_nav.php:12
        #: storage/themes/default/stats/browsers.php:9
        #: storage/themes/the23/partials/stats_nav.php:12
        "Browsers" => "",

        #: storage/themes/default/partials/stats_nav.php:15
        #: storage/themes/default/stats/languages.php:9
        #: storage/themes/the23/partials/stats_nav.php:15
        "Languages" => "",

        #: storage/themes/default/partials/stats_nav.php:18
        #: storage/themes/the23/partials/stats_nav.php:18
        "Referrers" => "",

        #: storage/themes/default/partials/topbar_menu.php:25
        #: storage/themes/the23/class/themeSettings.php:135
        #: storage/themes/the23/partials/main_menu.php:202
        "Dark Mode" => "",

        #: storage/themes/default/partials/topbar_menu.php:28
        #: storage/themes/the23/class/themeSettings.php:138
        "Light Mode" => "",

        #: storage/themes/default/partials/topbar_menu.php:44
        "{t} Notification|{t} Notifications" => "",

        #: storage/themes/default/partials/topbar_menu.php:100
        "Verified" => "",

        #: storage/themes/default/pixels/edit.php:6
        "View Links" => "",

        #: storage/themes/default/pixels/edit.php:18
        #: storage/themes/default/pixels/new.php:21
        "Pixel Name" => "",

        #: storage/themes/default/pixels/edit.php:19
        #: storage/themes/default/pixels/new.php:22
        "Shopify Campaign" => "",

        #: storage/themes/default/pixels/edit.php:24
        #: storage/themes/default/pixels/new.php:27
        "Pixel Tag" => "",

        #: storage/themes/default/pixels/edit.php:25
        #: storage/themes/default/pixels/new.php:28
        "Numerical or alphanumerical values only" => "",

        #: storage/themes/default/pixels/edit.php:29
        "Update Pixel" => "",

        #: storage/themes/default/pixels/index.php:3
        #: storage/themes/default/pixels/new.php:45
        "Ad platforms such as Facebook and Adwords provide a conversion tracking tool to allow you to gather data on your customers and how they behave on your website. By adding your pixel ID from either of the platforms, you will be able to optimize marketing simply by using short URLs." => "",

        #: storage/themes/default/pixels/index.php:7
        #: storage/themes/default/pixels/index.php:82
        #: storage/themes/default/pixels/new.php:1
        #: storage/themes/default/pixels/new.php:32
        "Add Pixel" => "",

        #: storage/themes/default/pixels/index.php:24
        "Provider" => "",

        #: storage/themes/default/pixels/new.php:11
        "Pixel Provider" => "",

        #: storage/themes/default/pixels/new.php:41
        "What are tracking pixels?" => "",

        #: storage/themes/default/pixels/new.php:46
        "More info" => "",

        #: storage/themes/default/pricing/checkout.php:13
        #: storage/themes/the23/pricing/checkout.php:11
        "Payment Method" => "",

        #: storage/themes/default/pricing/checkout.php:32
        #: storage/themes/default/user/confirmation.php:16
        #: storage/themes/default/user/settings.php:95
        #: storage/themes/default/user/verification.php:23
        #: storage/themes/the23/pricing/checkout.php:38
        "Billing Address" => "",

        #: storage/themes/default/pricing/checkout.php:36
        #: storage/themes/default/user/settings.php:107
        #: storage/themes/the23/pricing/checkout.php:42
        "Personal" => "",

        #: storage/themes/default/pricing/checkout.php:39
        #: storage/themes/default/user/settings.php:108
        #: storage/themes/the23/pricing/checkout.php:45
        "Business" => "",

        #: storage/themes/default/pricing/checkout.php:60
        #: storage/themes/default/user/settings.php:99
        #: storage/themes/default/user/verification.php:28
        #: storage/themes/the23/pricing/checkout.php:65
        "Full Name" => "",

        #: storage/themes/default/pricing/checkout.php:76
        #: storage/themes/default/user/settings.php:140
        #: storage/themes/default/user/verification.php:52
        #: storage/themes/the23/pricing/checkout.php:81
        "State/Province" => "",

        #: storage/themes/default/pricing/checkout.php:92
        #: storage/themes/default/user/settings.php:156
        #: storage/themes/default/user/verification.php:68
        #: storage/themes/the23/pricing/checkout.php:97
        "Zip/Postal code" => "",

        #: storage/themes/default/pricing/checkout.php:117
        #: storage/themes/the23/pricing/checkout.php:141
        "Subtotal" => "",

        #: storage/themes/default/pricing/checkout.php:124
        #: storage/themes/the23/pricing/checkout.php:148
        "Promo Code" => "",

        #: storage/themes/default/pricing/checkout.php:134
        #: storage/themes/the23/pricing/checkout.php:157
        "Apply promo code" => "",

        #: storage/themes/default/pricing/checkout.php:138
        #: storage/themes/the23/pricing/checkout.php:161
        "Discount" => "",

        #: storage/themes/default/pricing/checkout.php:164
        #: storage/themes/the23/pricing/checkout.php:187
        "One-time payment" => "",

        #: storage/themes/default/pricing/checkout.php:164
        #: storage/themes/the23/pricing/checkout.php:187
        "Billed" => "",

        #: storage/themes/default/pricing/checkout.php:176
        #: storage/themes/default/pricing/checkout.php:193
        #: storage/themes/default/user/billing.php:94
        #: storage/themes/the23/pricing/checkout.php:197
        #: storage/themes/the23/pricing/checkout.php:214
        "Redeem Voucher" => "",

        #: storage/themes/default/pricing/checkout.php:180
        #: storage/themes/the23/pricing/checkout.php:201
        "By subscribing to this plan, you agree to our Terms & Conditions. Subscription is charged in {c}. If you have any questions, please contact us." => "",

        #: storage/themes/default/pricing/checkout.php:201
        #: storage/themes/default/user/billing.php:98
        #: storage/themes/the23/pricing/checkout.php:220
        "Voucher" => "",

        #: storage/themes/default/pricing/checkout.php:212
        #: storage/themes/default/user/billing.php:101
        #: storage/themes/the23/pricing/checkout.php:225
        "Redeem" => "",

        #: storage/themes/default/pricing/index.php:5
        #: storage/themes/the23/pricing/index.php:6
        "Simple Pricing" => "",

        #: storage/themes/default/pricing/index.php:7
        "Transparent pricing for everyone. Always know what you will pay." => "",

        #: storage/themes/default/pricing/index.php:45
        #: storage/themes/the23/pricing/index.php:45
        "Need a custom plan?" => "",

        #: storage/themes/default/pricing/index.php:46
        #: storage/themes/the23/pricing/index.php:46
        "If our current plans do not fit your needs, we will create a tailored plan just for your needs." => "",

        #: storage/themes/default/pricing/index.php:49
        #: storage/themes/the23/pricing/index.php:49
        "Custom Plan" => "",

        #: storage/themes/default/pricing/index.php:49
        #: storage/themes/the23/pricing/index.php:49
        "Contact Sales" => "",

        #: storage/themes/default/pricing/table.php:10
        #: storage/themes/default/pricing/table_list.php:23
        #: storage/themes/the23/pages/qr.php:8 storage/themes/the23/pricing/list.php:15
        #: storage/themes/the23/pricing/table.php:23
        "Free" => "",

        #: storage/themes/default/pricing/table.php:20
        #: storage/themes/the23/pricing/list.php:25
        "Number of short links allowed." => "",

        #: storage/themes/default/pricing/table.php:20
        #: storage/themes/default/pricing/table_list.php:34
        #: storage/themes/the23/index.php:164 storage/themes/the23/pricing/list.php:25
        #: storage/themes/the23/pricing/table.php:34
        "Short Links" => "",

        #: storage/themes/default/pricing/table.php:20
        #: storage/themes/default/pricing/table.php:21
        #: storage/themes/the23/pricing/list.php:25
        #: storage/themes/the23/pricing/list.php:26
        "mo" => "",

        #: storage/themes/default/pricing/table.php:21
        #: storage/themes/default/pricing/table_list.php:42
        #: storage/themes/the23/pricing/list.php:26
        #: storage/themes/the23/pricing/table.php:42
        "Total clicks allowed over a period" => "",

        #: storage/themes/default/pricing/table.php:21
        #: storage/themes/default/pricing/table_list.php:42
        #: storage/themes/the23/pricing/list.php:26
        #: storage/themes/the23/pricing/table.php:42
        "Link Clicks" => "",

        #: storage/themes/default/pricing/table.php:22
        #: storage/themes/default/pricing/table_list.php:50
        #: storage/themes/the23/pricing/list.php:27
        #: storage/themes/the23/pricing/table.php:50
        "Amount of time statistics are kept for each short link." => "",

        #: storage/themes/default/pricing/table.php:22
        #: storage/themes/default/pricing/table_list.php:50
        #: storage/themes/the23/pricing/list.php:27
        #: storage/themes/the23/pricing/table.php:50
        "Data Retention" => "",

        #: storage/themes/default/pricing/table.php:22
        #: storage/themes/default/pricing/table_list.php:53
        #: storage/themes/the23/pricing/list.php:27
        #: storage/themes/the23/pricing/table.php:53
        "days" => "",

        #: storage/themes/default/pricing/table.php:39
        #: storage/themes/default/pricing/table_list.php:78
        #: storage/themes/the23/pricing/list.php:52
        #: storage/themes/the23/pricing/table.php:83
        "No advertisement will be shown when logged or in your links" => "",

        #: storage/themes/default/pricing/table.php:39
        #: storage/themes/default/pricing/table_list.php:78
        #: storage/themes/default/user/billing.php:83
        #: storage/themes/default/user/confirmation.php:98
        #: storage/themes/the23/pricing/list.php:52
        #: storage/themes/the23/pricing/table.php:83
        "Advertisement-Free" => "",

        #: storage/themes/default/pricing/table_list.php:16
        #: storage/themes/the23/pricing/list.php:7
        #: storage/themes/the23/pricing/table.php:16
        "Save {p}%" => "",

        #: storage/themes/default/pricing/table_list.php:34
        #: storage/themes/the23/pricing/table.php:34
        "Number of short links allowed" => "",

        #: storage/themes/default/pricing/table_list.php:53
        #: storage/themes/the23/pricing/table.php:53
        "Forever" => "",

        #: storage/themes/default/private.php:10 storage/themes/the23/private.php:12
        "Hello" => "",

        #: storage/themes/default/private.php:12 storage/themes/the23/private.php:14
        "Thanks for your interest but this website is currently used privately." => "",

        #: storage/themes/default/qr/bulk.php:10 storage/themes/default/qr/edit.php:12
        #: storage/themes/default/qr/new.php:10
        "QR Code Name" => "",

        #: storage/themes/default/qr/bulk.php:20 storage/themes/default/qr/edit.php:23
        #: storage/themes/default/qr/new.php:20
        "Choose domain to generate the link with when using dynamic QR codes. Not applicable for static QR codes." => "",

        #: storage/themes/default/qr/bulk.php:25 storage/themes/default/qr/new.php:25
        "Static QR" => "",

        #: storage/themes/default/qr/bulk.php:25 storage/themes/default/qr/new.php:25
        "Static QR codes cannot be tracked." => "",

        #: storage/themes/default/qr/bulk.php:28 storage/themes/default/qr/new.php:32
        "Dynamic QR" => "",

        #: storage/themes/default/qr/bulk.php:28 storage/themes/default/qr/new.php:32
        "With dynamic QR codes, you can track things like location, browser and device when a user scans the QR code." => "",

        #: storage/themes/default/qr/bulk.php:36
        "You can generate QR codes in bulk either by entering data manually or by importing a CSV file. In both cases, you need to format your data one per line. Please note that the maximum amount of QR codes on your account {l} still applies." => "",

        #: storage/themes/default/qr/bulk.php:39
        "One per line" => "",

        #: storage/themes/default/qr/bulk.php:43
        "Upload CSV (max {s}mb)" => "",

        #: storage/themes/default/qr/bulk.php:50 storage/themes/default/qr/edit.php:431
        #: storage/themes/default/qr/new.php:429
        "Colors" => "",

        #: storage/themes/default/qr/bulk.php:99 storage/themes/default/qr/edit.php:480
        #: storage/themes/default/qr/new.php:478
        "Gradient Direction" => "",

        #: storage/themes/default/qr/bulk.php:101
        #: storage/themes/default/qr/edit.php:482 storage/themes/default/qr/new.php:480
        "Vertical" => "",

        #: storage/themes/default/qr/bulk.php:102
        #: storage/themes/default/qr/edit.php:483 storage/themes/default/qr/new.php:481
        "Horizontal" => "",

        #: storage/themes/default/qr/bulk.php:103
        #: storage/themes/default/qr/edit.php:484 storage/themes/default/qr/new.php:482
        "Radial" => "",

        #: storage/themes/default/qr/bulk.php:104
        #: storage/themes/default/qr/edit.php:485 storage/themes/default/qr/new.php:483
        "Diagonal" => "",

        #: storage/themes/default/qr/bulk.php:112
        #: storage/themes/default/qr/edit.php:493 storage/themes/default/qr/new.php:491
        "Eye Frame Color" => "",

        #: storage/themes/default/qr/bulk.php:116
        #: storage/themes/default/qr/edit.php:497 storage/themes/default/qr/new.php:495
        "Eye Color" => "",

        #: storage/themes/default/qr/bulk.php:161
        #: storage/themes/default/qr/bulk.php:181
        #: storage/themes/default/qr/edit.php:547
        #: storage/themes/default/qr/edit.php:567 storage/themes/default/qr/new.php:540
        #: storage/themes/default/qr/new.php:560
        "Custom Logo" => "",

        #: storage/themes/default/qr/bulk.php:165
        #: storage/themes/default/qr/edit.php:551 storage/themes/default/qr/new.php:544
        "Size" => "",

        #: storage/themes/default/qr/bulk.php:171
        #: storage/themes/default/qr/edit.php:557 storage/themes/default/qr/new.php:550
        "Embedded Logo" => "",

        #: storage/themes/default/qr/bulk.php:172
        #: storage/themes/default/qr/edit.php:558 storage/themes/default/qr/new.php:551
        "Logo can now be embedded in the QR code. Please note that embedded logos can sometimes lead to unstable QR codes so please check to make sure the QR works." => "",

        #: storage/themes/default/qr/bulk.php:192
        #: storage/themes/default/qr/edit.php:578 storage/themes/default/qr/new.php:571
        "Matrix Style" => "",

        #: storage/themes/default/qr/bulk.php:221
        #: storage/themes/default/qr/edit.php:607 storage/themes/default/qr/new.php:600
        "Eye Frame" => "",

        #: storage/themes/default/qr/bulk.php:251
        #: storage/themes/default/qr/edit.php:636 storage/themes/default/qr/new.php:630
        "Eye Style" => "",

        #: storage/themes/default/qr/bulk.php:291
        #: storage/themes/default/qr/bulk.php:358
        #: storage/themes/default/qr/edit.php:676
        #: storage/themes/default/qr/edit.php:741 storage/themes/default/qr/new.php:670
        #: storage/themes/default/qr/new.php:737
        "Frame Style" => "",

        #: storage/themes/default/qr/bulk.php:329
        #: storage/themes/default/qr/edit.php:714 storage/themes/default/qr/new.php:708
        "Limit of {x} characters" => "",

        #: storage/themes/default/qr/bulk.php:334
        #: storage/themes/default/qr/edit.php:719 storage/themes/default/qr/new.php:713
        "Font" => "",

        #: storage/themes/default/qr/bulk.php:345
        #: storage/themes/default/qr/edit.php:730 storage/themes/default/qr/new.php:724
        "Frame Color" => "",

        #: storage/themes/default/qr/bulk.php:370
        #: storage/themes/default/qr/edit.php:752 storage/themes/default/qr/new.php:749
        "Margin" => "",

        #: storage/themes/default/qr/bulk.php:374
        #: storage/themes/default/qr/edit.php:756 storage/themes/default/qr/new.php:753
        "Error Correction" => "",

        #: storage/themes/default/qr/bulk.php:375
        #: storage/themes/default/qr/edit.php:757 storage/themes/default/qr/new.php:754
        "Error correction allows better readability when code is damaged or dirty but increase QR data" => "",

        #: storage/themes/default/qr/bulk.php:391
        #: storage/themes/default/qr/edit.php:773 storage/themes/default/qr/new.php:770
        #: storage/themes/default/stats/partial.php:7
        #: storage/themes/default/user/activity.php:50
        #: storage/themes/default/user/index.php:156
        "QR Code" => "",

        #: storage/themes/default/qr/bulk.php:401 storage/themes/default/qr/new.php:780
        #: storage/themes/default/splash/edit.php:4
        #: storage/themes/default/splash/edit.php:74
        "Preview" => "",

        #: storage/themes/default/qr/bulk.php:402 storage/themes/default/qr/new.php:781
        "Generate QR" => "",

        #: storage/themes/default/qr/bulk.php:406
        #: storage/themes/default/qr/edit.php:812 storage/themes/default/qr/new.php:785
        "You will be able to download the QR code in PDF or SVG after it has been generated." => "",

        #: storage/themes/default/qr/bulk.php:407 storage/themes/default/qr/new.php:786
        "If you are using a fancy design, your QR code might not be readible. If that is the case, you can increase Error Correction to ensure optimal readability. It is recommended to test the QR code before saving it." => "",

        #: storage/themes/default/qr/edit.php:17
        "If you change the domain name, the QR code will change!" => "",

        #: storage/themes/default/qr/edit.php:48 storage/themes/default/qr/new.php:62
        "Your Link" => "",

        #: storage/themes/default/qr/edit.php:91 storage/themes/default/qr/new.php:27
        #: storage/themes/default/qr/new.php:99
        "SMS & Message" => "",

        #: storage/themes/default/qr/edit.php:332
        #: storage/themes/default/qr/edit.php:336 storage/themes/default/qr/new.php:41
        #: storage/themes/default/qr/new.php:390
        "Cryptocurrency" => "",

        #: storage/themes/default/qr/edit.php:338 storage/themes/default/qr/new.php:392
        "Bitcoin" => "",

        #: storage/themes/default/qr/edit.php:341 storage/themes/default/qr/new.php:395
        "Ethereum" => "",

        #: storage/themes/default/qr/edit.php:344 storage/themes/default/qr/new.php:398
        "Bitcoin Cash" => "",

        #: storage/themes/default/qr/edit.php:348 storage/themes/default/qr/new.php:402
        "Wallet Address" => "",

        #: storage/themes/default/qr/edit.php:357 storage/themes/default/qr/new.php:129
        "File Upload (Image or PDF)" => "",

        #: storage/themes/default/qr/edit.php:359
        "View File" => "",

        #: storage/themes/default/qr/edit.php:364 storage/themes/default/qr/new.php:132
        "This can be used to upload an image or a PDF. Most common uses are restaurant menu, promotional poster and resume." => "",

        #: storage/themes/default/qr/edit.php:368 storage/themes/default/qr/new.php:136
        "Acceptable file: jpg, png, gif, pdf. Max {d}MB." => "",

        #: storage/themes/default/qr/edit.php:411 storage/themes/default/qr/new.php:38
        #: storage/themes/default/qr/new.php:409
        "Application" => "",

        #: storage/themes/default/qr/edit.php:423 storage/themes/default/qr/new.php:421
        "Link for others" => "",

        #: storage/themes/default/qr/edit.php:793
        #: storage/themes/default/qr/index.php:85
        #: storage/themes/default/qr/index.php:88
        "Download as PNG" => "",

        #: storage/themes/default/qr/edit.php:794
        #: storage/themes/default/qr/edit.php:803
        #: storage/themes/default/qr/index.php:86
        #: storage/themes/default/qr/index.php:89
        "Download as WebP" => "",

        #: storage/themes/default/qr/edit.php:802
        #: storage/themes/default/qr/index.php:83
        "Download as SVG" => "",

        #: storage/themes/default/qr/edit.php:804
        #: storage/themes/default/qr/index.php:90
        "Download as PDF" => "",

        #: storage/themes/default/qr/edit.php:813
        "If you are using a fancy design, your QR code might not be readable. If that is the case, you can increase Error Correction to ensure optimal readability. It is recommended to test the QR code before saving it." => "",

        #: storage/themes/default/qr/index.php:10
        "Bulk QR" => "",

        #: storage/themes/default/qr/index.php:19
        "scans" => "",

        #: storage/themes/default/qr/index.php:51
        #: storage/themes/default/user/index.php:75
        #: storage/themes/default/user/links.php:11
        "Select All" => "",

        #: storage/themes/default/qr/index.php:52
        #: storage/themes/default/user/index.php:76
        #: storage/themes/default/user/links.php:12
        "Selected" => "",

        #: storage/themes/default/qr/index.php:52
        #: storage/themes/default/user/index.php:76
        #: storage/themes/default/user/links.php:12
        "Actions" => "",

        #: storage/themes/default/qr/index.php:54
        "Download Selected" => "",

        #: storage/themes/default/qr/index.php:57
        #: storage/themes/default/user/index.php:98
        #: storage/themes/default/user/links.php:34
        "Delete Selected" => "",

        #: storage/themes/default/qr/index.php:114
        #: storage/themes/default/stats/partial.php:37
        "Scans" => "",

        #: storage/themes/default/qr/index.php:208
        #: storage/themes/default/user/index.php:244
        #: storage/themes/default/user/links.php:149
        "You are trying to delete many records. This action is permanent and cannot be reversed." => "",

        #: storage/themes/default/qr/index.php:221
        "Download QR Codes" => "",

        #: storage/themes/default/qr/index.php:228
        "Download as" => "",

        #: storage/themes/default/qr/new.php:29 storage/themes/default/qr/new.php:242
        "Static vCard" => "",

        #: storage/themes/default/qr/new.php:386
        "Crypto" => "",

        #: storage/themes/default/qr/new.php:403
        "Enter your public wallet address" => "",

        #: storage/themes/default/splash/create.php:17
        #: storage/themes/default/splash/edit.php:22
        "Counter" => "",

        #: storage/themes/default/splash/create.php:25
        #: storage/themes/default/splash/edit.php:30
        "Link to Product" => "",

        #: storage/themes/default/splash/create.php:31
        #: storage/themes/default/splash/edit.php:36
        "Custom Title" => "",

        #: storage/themes/default/splash/create.php:32
        #: storage/themes/default/splash/edit.php:37
        "Get a $10 discount" => "",

        #: storage/themes/default/splash/create.php:39
        #: storage/themes/default/splash/edit.php:44
        "Upload Banner" => "",

        #: storage/themes/default/splash/create.php:41
        #: storage/themes/default/splash/edit.php:46
        "The minimum width must be 980px and the height must be between 250 and 500. The format must be a PNG or a JPG. Maximum size is 500KB" => "",

        #: storage/themes/default/splash/create.php:46
        #: storage/themes/default/splash/edit.php:51
        "Upload Avatar" => "",

        #: storage/themes/default/splash/edit.php:53
        "The avatar can be in png, jpg or gif with a maximum size of 500kb." => "",

        #: storage/themes/default/splash/index.php:2
        "A custom splash page is a transitional page where you can add a banner and a logo along with a message to represent your brand or company. When creating a short link, you will be able to assign the page to your short url. Users who visit your url will briefly see the page before being redirected to their destination." => "",

        #: storage/themes/default/stats/abtesting.php:10
        "URL Traffic Distribution" => "",

        #: storage/themes/default/stats/abtesting.php:22
        "clicks" => "",

        #: storage/themes/default/stats/abtesting.php:22
        "of traffic" => "",

        #: storage/themes/default/stats/activity.php:33
        #: storage/themes/default/user/activity.php:25
        "Device" => "",

        #: storage/themes/default/stats/activity.php:42
        #: storage/themes/default/user/activity.php:34
        "Between" => "",

        #: storage/themes/default/stats/activity.php:44
        #: storage/themes/default/stats/browsers.php:11
        #: storage/themes/default/stats/countries.php:12
        #: storage/themes/default/stats/index.php:12
        #: storage/themes/default/stats/languages.php:11
        #: storage/themes/default/stats/platforms.php:11
        #: storage/themes/default/user/activity.php:36
        "Choose a date range to update stats" => "",

        #: storage/themes/default/stats/activity.php:49
        #: storage/themes/default/user/activity.php:41
        #: storage/themes/default/user/links.php:69
        "Filter" => "",

        #: storage/themes/default/stats/activity.php:84
        #: storage/themes/default/stats/index.php:59
        #: storage/themes/default/user/activity.php:95
        #: storage/themes/default/user/index.php:200
        "Direct, email or others" => "",

        #: storage/themes/default/stats/browsers.php:25
        "Top Browsers" => "",

        #: storage/themes/default/stats/countries.php:10
        #: storage/themes/default/user/campaignstats.php:51
        #: storage/themes/default/user/stats.php:36
        "Visitor Map" => "",

        #: storage/themes/default/stats/countries.php:28
        "Countries" => "",

        #: storage/themes/default/stats/countries.php:29
        #: storage/themes/default/stats/countries.php:40
        "Cities" => "",

        #: storage/themes/default/stats/countries.php:44
        "Select a region in the map above to display city data." => "",

        #: storage/themes/default/stats/languages.php:25
        "Top Languages" => "",

        #: storage/themes/default/stats/partial.php:45
        "Unique Scans" => "",

        #: storage/themes/default/stats/partial.php:53
        "Top Country" => "",

        #: storage/themes/default/stats/partial.php:61
        "Top Referrer" => "",

        #: storage/themes/default/stats/platforms.php:25
        "Top Platforms" => "",

        #: storage/themes/default/stats/referrers.php:10
        "Top Referrers" => "",

        #: storage/themes/default/stats/referrers.php:19
        "Direct, email and others" => "",

        #: storage/themes/default/stats/referrers.php:28
        "Social Media" => "",

        #: storage/themes/default/teams/edit.php:1
        "Edit Member" => "",

        #: storage/themes/default/teams/edit.php:11
        #: storage/themes/default/teams/edit.php:12
        #: storage/themes/default/teams/index.php:18
        #: storage/themes/default/teams/index.php:19
        #: storage/themes/default/teams/index.php:155
        "Permissions" => "",

        #: storage/themes/default/teams/edit.php:14
        #: storage/themes/default/teams/index.php:20
        "Create Links" => "",

        #: storage/themes/default/teams/edit.php:15
        #: storage/themes/default/teams/index.php:21
        "Edit Links" => "",

        #: storage/themes/default/teams/edit.php:16
        #: storage/themes/default/teams/index.php:22
        "Delete Links" => "",

        #: storage/themes/default/teams/edit.php:22
        #: storage/themes/default/teams/index.php:28
        "Delete QR" => "",

        #: storage/themes/default/teams/edit.php:28
        #: storage/themes/default/teams/index.php:34
        "Edit Bio" => "",

        #: storage/themes/default/teams/edit.php:29
        #: storage/themes/default/teams/index.php:35
        "Delete Bio" => "",

        #: storage/themes/default/teams/edit.php:34
        #: storage/themes/default/teams/index.php:40
        "Create Splash" => "",

        #: storage/themes/default/teams/edit.php:35
        #: storage/themes/default/teams/index.php:41
        "Edit Splash" => "",

        #: storage/themes/default/teams/edit.php:36
        #: storage/themes/default/teams/index.php:42
        "Delete Splash" => "",

        #: storage/themes/default/teams/edit.php:41
        #: storage/themes/default/teams/index.php:47
        "Create Overlay" => "",

        #: storage/themes/default/teams/edit.php:42
        #: storage/themes/default/teams/index.php:48
        "Edit Overlay" => "",

        #: storage/themes/default/teams/edit.php:43
        #: storage/themes/default/teams/index.php:49
        "Delete Overlay" => "",

        #: storage/themes/default/teams/edit.php:48
        #: storage/themes/default/teams/index.php:54
        "Create Pixels" => "",

        #: storage/themes/default/teams/edit.php:49
        #: storage/themes/default/teams/index.php:55
        "Edit Pixels" => "",

        #: storage/themes/default/teams/edit.php:50
        #: storage/themes/default/teams/index.php:56
        "Delete Pixels" => "",

        #: storage/themes/default/teams/edit.php:55
        "Add Branded Domain" => "",

        #: storage/themes/default/teams/edit.php:56
        "Delete Branded Domain" => "",

        #: storage/themes/default/teams/edit.php:61
        #: storage/themes/default/teams/index.php:67
        "Create Campaigns" => "",

        #: storage/themes/default/teams/edit.php:62
        #: storage/themes/default/teams/index.php:68
        "Edit Campaigns" => "",

        #: storage/themes/default/teams/edit.php:63
        #: storage/themes/default/teams/index.php:69
        "Delete Campaigns" => "",

        #: storage/themes/default/teams/index.php:9
        "Invite Members" => "",

        #: storage/themes/default/teams/index.php:60
        "Branded Domain" => "",

        #: storage/themes/default/teams/index.php:61
        "Add Custom Domain" => "",

        #: storage/themes/default/teams/index.php:62
        "Delete Custom Domain" => "",

        #: storage/themes/default/teams/index.php:82
        "Invite" => "",

        #: storage/themes/default/teams/index.php:102
        "Requested" => "",

        #: storage/themes/default/teams/index.php:105
        "Disable" => "",

        #: storage/themes/default/teams/index.php:112
        "Manage" => "",

        #: storage/themes/default/teams/index.php:113
        "View Permissions" => "",

        #: storage/themes/default/teams/index.php:127
        "No members found. You can invite one." => "",

        #: storage/themes/default/teams/index.php:129
        "Add Member" => "",

        #: storage/themes/default/user/affiliate.php:6
        "Affiliate Link" => "",

        #: storage/themes/default/user/affiliate.php:19
        "Referral History" => "",

        #: storage/themes/default/user/affiliate.php:26
        "Commission" => "",

        #: storage/themes/default/user/affiliate.php:27
        "Referred On" => "",

        #: storage/themes/default/user/affiliate.php:28
        "Paid On" => "",

        #: storage/themes/default/user/affiliate.php:37
        #: storage/themes/default/user/verification.php:86
        "Approved" => "",

        #: storage/themes/default/user/affiliate.php:39
        "Paid" => "",

        #: storage/themes/default/user/affiliate.php:41
        #: storage/themes/default/user/verification.php:84
        "Rejected" => "",

        #: storage/themes/default/user/affiliate.php:60
        "Current Earning" => "",

        #: storage/themes/default/user/affiliate.php:68
        "Affiliate Rate" => "",

        #: storage/themes/default/user/affiliate.php:72
        "per qualifying sales" => "",

        #: storage/themes/default/user/affiliate.php:72
        "per user payment (recurring)" => "",

        #: storage/themes/default/user/affiliate.php:72
        "paid once" => "",

        #: storage/themes/default/user/affiliate.php:73
        "Minimum earning of {amount} is required for payment." => "",

        #: storage/themes/default/user/affiliate.php:77
        "Terms" => "",

        #: storage/themes/default/user/affiliate.php:88
        "Please enter your PayPal email so we can send you your commission" => "",

        #: storage/themes/default/user/billing.php:5
        "Subscription History" => "",

        #: storage/themes/default/user/billing.php:11
        "Since" => "",

        #: storage/themes/default/user/billing.php:12
        "Next Payment" => "",

        #: storage/themes/default/user/billing.php:13
        "Status" => "",

        #: storage/themes/default/user/billing.php:29
        "Payment History" => "",

        #: storage/themes/default/user/billing.php:35
        "Transaction ID" => "",

        #: storage/themes/default/user/billing.php:37
        #: storage/themes/default/user/security.php:11
        "Date" => "",

        #: storage/themes/default/user/billing.php:44
        "Refunded" => "",

        #: storage/themes/default/user/billing.php:45
        "Free Trial" => "",

        #: storage/themes/default/user/billing.php:58
        #: storage/themes/default/user/confirmation.php:69
        "Current Plan" => "",

        #: storage/themes/default/user/billing.php:68
        "/mo" => "",

        #: storage/themes/default/user/billing.php:68
        #: storage/themes/default/user/confirmation.php:72
        "URLs allowed" => "",

        #: storage/themes/default/user/billing.php:69
        #: storage/themes/default/user/confirmation.php:73
        "Clicks per month" => "",

        #: storage/themes/default/user/billing.php:74
        "/min" => "",

        #: storage/themes/default/user/billing.php:86
        "Change plan" => "",

        #: storage/themes/default/user/billing.php:109
        #: storage/themes/default/user/billing.php:113
        "Manage Membership" => "",

        #: storage/themes/default/user/billing.php:112
        "You can manage your membership on directly on the payment processor where you can update your credit card and view your invoices." => "",

        #: storage/themes/default/user/billing.php:120
        #: storage/themes/default/user/billing.php:139
        "Cancel Membership" => "",

        #: storage/themes/default/user/billing.php:123
        "You can cancel your membership whenever you want. Upon request, your membership will be canceled right before your next payment period. This means you can still enjoy premium features until the end of your membership." => "",

        #: storage/themes/default/user/billing.php:124
        #: storage/themes/default/user/billing.php:155
        "Cancel membership" => "",

        #: storage/themes/default/user/billing.php:143
        "We respect your decision and we are sorry to see you go. If you want to share anything with us, please use the box below and we will do our best to improve our service." => "",

        #: storage/themes/default/user/billing.php:150
        "Reason for cancellation" => "",

        #: storage/themes/default/user/campaigns.php:4
        "A campaign can be used to group links together for various purpose. You can use the dedicated rotator link where a random link will be chosen and redirected to among the group. You will also be able to view aggregated statistics for a campaign." => "",

        #: storage/themes/default/user/campaigns.php:8
        #: storage/themes/default/user/campaigns.php:85
        #: storage/themes/default/user/campaigns.php:99
        "Create a Campaign" => "",

        #: storage/themes/default/user/campaigns.php:15
        "Campaign List Disabled" => "",

        #: storage/themes/default/user/campaigns.php:17
        "To create a list page for the campaign, you need a default bio page and public profile settings." => "",

        #: storage/themes/default/user/campaigns.php:19
        "Default Bio" => "",

        #: storage/themes/default/user/campaigns.php:32
        "Rotator" => "",

        #: storage/themes/default/user/campaigns.php:41
        "Inactive" => "",

        #: storage/themes/default/user/campaigns.php:44
        #: storage/themes/default/user/import.php:77
        "links" => "",

        #: storage/themes/default/user/campaigns.php:105
        #: storage/themes/default/user/campaigns.php:154
        "Campaign Name" => "",

        #: storage/themes/default/user/campaigns.php:105
        #: storage/themes/default/user/campaigns.php:154
        #: storage/themes/default/user/channel.php:90
        #: storage/themes/default/user/channels.php:90
        #: storage/themes/default/user/channels.php:132
        "required" => "",

        #: storage/themes/default/user/campaigns.php:119
        #: storage/themes/default/user/campaigns.php:159
        "Rotator Slug" => "",

        #: storage/themes/default/user/campaigns.php:119
        #: storage/themes/default/user/campaigns.php:159
        "optional" => "",

        #: storage/themes/default/user/campaigns.php:121
        #: storage/themes/default/user/campaigns.php:161
        "If you want to set a custom alias for the rotator link, you can fill this field." => "",

        #: storage/themes/default/user/campaigns.php:125
        #: storage/themes/default/user/campaigns.php:165
        "Access" => "",

        #: storage/themes/default/user/campaigns.php:126
        #: storage/themes/default/user/campaigns.php:166
        "Disabling this option will deactivate the rotator link." => "",

        #: storage/themes/default/user/campaigns.php:135
        "Create Campaign" => "",

        #: storage/themes/default/user/campaigns.php:148
        #: storage/themes/default/user/campaigns.php:175
        "Update Campaign" => "",

        #: storage/themes/default/user/campaignstats.php:7
        #: storage/themes/default/user/stats.php:7
        "Export Stats" => "",

        #: storage/themes/default/user/campaignstats.php:16
        "Traffic Distribution" => "",

        #: storage/themes/default/user/campaignstats.php:61
        #: storage/themes/default/user/stats.php:46
        "Top Countries" => "",

        #: storage/themes/default/user/campaignstats.php:73
        "Browser" => "",

        #: storage/themes/default/user/campaignstats.php:107
        #: storage/themes/default/user/stats.php:66
        "Choose a range to export data as CSV. Exported data will including information like date, city and country, os, browser, referer and language." => "",

        #: storage/themes/default/user/campaignstats.php:112
        #: storage/themes/default/user/index.php:94
        #: storage/themes/default/user/links.php:30
        #: storage/themes/default/user/links.php:117
        #: storage/themes/default/user/stats.php:71
        "Export" => "",

        #: storage/themes/default/user/channel.php:49
        "Created on" => "",

        #: storage/themes/default/user/channel.php:65
        "Are you sure you want to remove this item from this channel?" => "",

        #: storage/themes/default/user/channel.php:69
        "You are trying to remove an item from a channel." => "",

        #: storage/themes/default/user/channel.php:84
        #: storage/themes/default/user/channels.php:126
        "Update Channel" => "",

        #: storage/themes/default/user/channel.php:98
        #: storage/themes/default/user/channels.php:98
        #: storage/themes/default/user/channels.php:140
        "Badge Color" => "",

        #: storage/themes/default/user/channel.php:103
        #: storage/themes/default/user/channels.php:103
        #: storage/themes/default/user/channels.php:145
        "Star Channel" => "",

        #: storage/themes/default/user/channel.php:104
        #: storage/themes/default/user/channels.php:104
        #: storage/themes/default/user/channels.php:146
        "Starred channels will show up in the sidebar navigation for quick access." => "",

        #: storage/themes/default/user/channels.php:7
        #: storage/themes/default/user/channels.php:113
        "Create Channel" => "",

        #: storage/themes/default/user/channels.php:20
        "Starred Channels" => "",

        #: storage/themes/default/user/channels.php:40
        #: storage/themes/default/user/channels.php:70
        "items" => "",

        #: storage/themes/default/user/channels.php:41
        #: storage/themes/default/user/channels.php:71
        "View Channel" => "",

        #: storage/themes/default/user/channels.php:84
        "Create a Channel" => "",

        #: storage/themes/default/user/confirmation.php:27
        "Order Date" => "",

        #: storage/themes/default/user/confirmation.php:33
        "Order No" => "",

        #: storage/themes/default/user/confirmation.php:62
        "Need Help?" => "",

        #: storage/themes/default/user/confirmation.php:74
        "Geotargeting" => "",

        #: storage/themes/default/user/confirmation.php:94
        "Campaigns & Link Rotator" => "",

        #: storage/themes/default/user/confirmation.php:97
        "URL Customization" => "",

        #: storage/themes/default/user/edit.php:197
        "If you have different pages for different languages then it is possible to redirect users to that page using the same short URL. Simply choose the language and enter the URL." => "",

        #: storage/themes/default/user/edit.php:257
        "Expiration by Clicks" => "",

        #: storage/themes/default/user/edit.php:279
        "A/B Testing and Rotator" => "",

        #: storage/themes/default/user/edit.php:285
        #, no-php-format
        "You can rotate multiple links using short link using the feature. If you do not assign a percentage or the percentage is 100% for all links then the traffic will equally distributed. Please note that default link will be added to the list as well and rotator will not work if you assign another targeting condition that matches." => "",

        #: storage/themes/default/user/import.php:6
        "This tool allows you to import links from other software. You need to format the import file as CSV with the following structure. Note that this tool only imports links. It does not import statistics." => "",

        #: storage/themes/default/user/import.php:8
        "When creating the CSV file, you need to keep the header but the column name can be anything as long as their position is respected. If the custom alias is taken, the importer will generate a random alias." => "",

        #: storage/themes/default/user/import.php:10
        "CSV Format" => "",

        #: storage/themes/default/user/import.php:13
        "Sample" => "",

        #: storage/themes/default/user/import.php:16
        #: storage/themes/default/user/security.php:87
        #: storage/themes/default/user/settings.php:221
        "Important" => "",

        #: storage/themes/default/user/import.php:17
        "CSV cannot be bigger than {s}mb. If your file contains more than 100 links, links will be imported in the background. Please note that duplicate links will be ignored." => "",

        #: storage/themes/default/user/import.php:21
        "CSV File" => "",

        #: storage/themes/default/user/import.php:61
        "Pending Job" => "",

        #: storage/themes/default/user/import.php:69
        "Completed" => "",

        #: storage/themes/default/user/import.php:71
        "Processing" => "",

        #: storage/themes/default/user/index.php:12
        #: storage/themes/default/user/index.php:22
        "Today" => "",

        #: storage/themes/default/user/index.php:34
        "Recent Clicks" => "",

        #: storage/themes/default/user/index.php:48
        "We are currently manually approving links. As soon as the link is approved, you will be able to start using it." => "",

        #: storage/themes/default/user/index.php:58
        "Recent Links" => "",

        #: storage/themes/default/user/index.php:80
        #: storage/themes/default/user/links.php:16
        "Unarchive Selected" => "",

        #: storage/themes/default/user/index.php:82
        #: storage/themes/default/user/links.php:18
        "Archive Selected" => "",

        #: storage/themes/default/user/index.php:86
        #: storage/themes/default/user/index.php:277
        #: storage/themes/default/user/links.php:22
        #: storage/themes/default/user/links.php:226
        "Add to Campaign" => "",

        #: storage/themes/default/user/index.php:90
        #: storage/themes/default/user/index.php:334
        #: storage/themes/default/user/links.php:26
        #: storage/themes/default/user/links.php:283
        "Add Pixels" => "",

        #: storage/themes/default/user/index.php:112
        #: storage/themes/default/user/links.php:77
        "Search for links" => "",

        #: storage/themes/default/user/index.php:130
        "No links found. You can create some." => "",

        #: storage/themes/default/user/links.php:44
        "Sort Results" => "",

        #: storage/themes/default/user/links.php:47
        "Sort By" => "",

        #: storage/themes/default/user/links.php:52
        "Most Popular" => "",

        #: storage/themes/default/user/links.php:53
        "Less Popular" => "",

        #: storage/themes/default/user/links.php:58
        "Results Per Page" => "",

        #: storage/themes/default/user/links.php:66
        "Older than" => "",

        #: storage/themes/default/user/links.php:105
        "per month" => "",

        #: storage/themes/default/user/links.php:115
        "Export Links" => "",

        #: storage/themes/default/user/links.php:116
        "This tool allows you to generate a list of urls in CSV format. Some basic data such clicks will be included as well." => "",

        #: storage/themes/default/user/security.php:9
        "Type" => "",

        #: storage/themes/default/user/security.php:10
        "Logged Details" => "",

        #: storage/themes/default/user/security.php:19
        "Failed" => "",

        #: storage/themes/default/user/security.php:69
        #: storage/themes/default/user/security.php:138
        "Logout on all devices" => "",

        #: storage/themes/default/user/security.php:70
        #: storage/themes/default/user/security.php:143
        "If you think your account is exposed or at risk, you can logout of all devices. We also recommend you to change your password as a precaution after logging out of all devices." => "",

        #: storage/themes/default/user/security.php:71
        #: storage/themes/default/user/security.php:152
        "Logout" => "",

        #: storage/themes/default/user/security.php:76
        #: storage/themes/default/user/security.php:104
        #: storage/themes/default/user/settings.php:210
        #: storage/themes/default/user/settings.php:298
        "Two-Factor Authentication (2FA)" => "",

        #: storage/themes/default/user/security.php:78
        #: storage/themes/default/user/settings.php:212
        "2FA is an enhanced level security for your account. Each time you login, an extra step where you will need to enter a unique code will be required to gain access to your account. To enable 2FA, please click the button below and download the <strong>Google Authenticator</strong> app from Apple Store or Play Store." => "",

        #: storage/themes/default/user/security.php:81
        #: storage/themes/default/user/settings.php:215
        "View QR" => "",

        #: storage/themes/default/user/security.php:89
        #: storage/themes/default/user/settings.php:223
        "You need to scan the code above with the app. You need to backup the QR code by saving it and save the key somewhere safe in case you lose your phone. You will not be able to login if you can't provide the code, in that case you will need to contact us. If you disable 2FA and re-enable it, you will need to scan a new code." => "",

        #: storage/themes/default/user/security.php:90
        #: storage/themes/default/user/settings.php:224
        "Disable 2FA" => "",

        #: storage/themes/default/user/security.php:92
        #: storage/themes/default/user/settings.php:226
        "Activate 2FA" => "",

        #: storage/themes/default/user/security.php:110
        #: storage/themes/default/user/settings.php:304
        "You need to scan the code above with the app then enter the 6-digit number that you see in the app to activate 2FA. It is highly recommended to backup the unique key somewhere safe." => "",

        #: storage/themes/default/user/security.php:126
        #: storage/themes/default/user/settings.php:320
        "Activate" => "",

        #: storage/themes/default/user/settings.php:5
        "You have used a social network to login. Please note that in this case you don't have a password set." => "",

        #: storage/themes/default/user/settings.php:9
        "You have used a social network to login. You will need to choose a username." => "",

        #: storage/themes/default/user/settings.php:20
        "Avatar" => "",

        #: storage/themes/default/user/settings.php:22
        "By default, we will use the Gravatar associated to your email. Uploaded avatars must be square with the width ranging from 200-500px with a maximum size of 500kb." => "",

        #: storage/themes/default/user/settings.php:39
        "Please note that if you change your email, you will need to activate your account again." => "",

        #: storage/themes/default/user/settings.php:47
        "A username is required for your public profile to be visible." => "",

        #: storage/themes/default/user/settings.php:56
        #: storage/themes/default/user/settings.php:63
        "Leave blank to keep current one." => "",

        #: storage/themes/default/user/settings.php:70
        "Default Domain" => "",

        #: storage/themes/default/user/settings.php:83
        "Default Redirection" => "",

        #: storage/themes/default/user/settings.php:105
        "Account Type" => "",

        #: storage/themes/default/user/settings.php:116
        #: storage/themes/default/user/verification.php:34
        "Company Name" => "",

        #: storage/themes/default/user/settings.php:167
        "Public profile will be activated only when this option is public." => "",

        #: storage/themes/default/user/settings.php:179
        "Media Gateway" => "",

        #: storage/themes/default/user/settings.php:180
        "If enabled, special pages will be automatically created for your media URLs (e.g. youtube, vimeo, dailymotion...)." => "",

        #: storage/themes/default/user/settings.php:193
        "If enabled, you will receive occasional newsletters from us." => "",

        #: storage/themes/default/user/settings.php:232
        #: storage/themes/default/user/settings.php:277
        "Developer API Key" => "",

        #: storage/themes/default/user/settings.php:239
        #: storage/themes/default/user/settings.php:252
        "Delete your account" => "",

        #: storage/themes/default/user/settings.php:240
        #: storage/themes/default/user/settings.php:257
        "We respect your privacy and as such you can delete your account permanently and remove all your data from our server. Please note that this action is permanent and cannot be reversed." => "",

        #: storage/themes/default/user/settings.php:241
        "Delete Permanently" => "",

        #: storage/themes/default/user/settings.php:282
        "If you regenerate your key, the current key will be revoked and your applications might stop working until you update the api key with the new one." => "",

        #: storage/themes/default/user/tools.php:8
        #: storage/themes/default/user/tools.php:35
        "Bookmarklet" => "",

        #: storage/themes/default/user/tools.php:9
        #: storage/themes/default/user/tools.php:54
        "Full-Page Script" => "",

        #: storage/themes/default/user/tools.php:19
        "This tool allows you to quickly shorten any URL in any page without using any fancy method. This is perhaps the quickest and the easiest method available for you to shorten URLs across all platforms. This method will generate a unique short URL for you that you will be able to access anytime from your dashboard." => "",

        #: storage/themes/default/user/tools.php:21
        "Use your quick URL below to shorten any URL by adding the URL after /q/?u=. <strong>For security reasons, you need to be logged in and using the remember me feature.</strong> Check out the examples below to understand how to use this method." => "",

        #: storage/themes/default/user/tools.php:27
        #: storage/themes/default/user/tools.php:46
        "Notes" => "",

        #: storage/themes/default/user/tools.php:29
        "Please note that this method does not return anything. It simply redirects the user to the redirection page. However if you need the actual short URL, you can always get it from your dashboard." => "",

        #: storage/themes/default/user/tools.php:39
        "You can use our bookmarklet tool to instantaneously shorten any site you are currently viewing and if you are logged in on our site, it will be automatically saved to your account for future access. Simply drag the following link to your bookmarks bar or copy the link and manually add it to your favorites." => "",

        #: storage/themes/default/user/tools.php:41
        "Drag me to your Bookmark Bar" => "",

        #: storage/themes/default/user/tools.php:41
        "Shorten URL" => "",

        #: storage/themes/default/user/tools.php:43
        "If you can't drag the link above, use your browser's bookmark editor to create a new bookmark and add the URL below as the link." => "",

        #: storage/themes/default/user/tools.php:48
        "Please note that for secured sites that use SSL, the widget will not pop up due to security issues. In that case, the user will be redirected our site where you will be able to view your short URL." => "",

        #: storage/themes/default/user/tools.php:58
        "This script allows you to shorten all (or select) URLs on your website very easily. All you need to do is to copy and paste the code below at the end of your page. You can customize the selector as you wish to target URLs in a specific selector. Note you can just  copy the code below because everything is already for you." => "",

        #: storage/themes/default/user/tools.php:62
        "Choosing a different domain" => "",

        #: storage/themes/default/user/tools.php:63
        "By default, the script uses the default domain on the platform however you can define a custom domain name to shorten links with. You need to make sure the domain is exactly the same as the domain added in the account, including the schema (http/https" => "",

        #: storage/themes/default/user/tools.php:67
        "Choosing custom selectors" => "",

        #: storage/themes/default/user/tools.php:68
        "By default, this script shortens all URLs in a page. If you want to target specific URLs then you can add a selector parameter. You can see an example below where the script will only shorten URLs having a class named mylink or all direct link in the .content container or all links in the .comments container" => "",

        #: storage/themes/default/user/tools.php:72
        "Excluding domain names" => "",

        #: storage/themes/default/user/tools.php:73
        "You can exclude domain names if you wish. You can add an exclude parameter to exclude domain names. The example below shortens all URLs but excludes URLs from google.com or apple.com" => "",

        #: storage/themes/default/user/tools.php:77
        "Restricting domain names" => "",

        #: storage/themes/default/user/tools.php:78
        "You can restrict domain names by adding an include parameter to restrict domain names. The example below shortens all URLs within the include domain name." => "",

        #: storage/themes/default/user/verification.php:15
        "You can get your account verified and this provides you several benefits. After we verify we your account, you will get a verified checkmark on your Bio Pages and your links will have a trusted status." => "",

        #: storage/themes/default/user/verification.php:17
        "All we need from you is a document that matches your name and address. Documents can be a national card, company bill or any other official document." => "",

        #: storage/themes/default/user/verification.php:19
        "Upload Document" => "",

        #: storage/themes/default/user/verification.php:21
        "2MB max, PDF or JPG" => "",

        #: storage/themes/default/user/verification.php:73
        "Submit" => "",

        #: storage/themes/default/user/verification.php:80
        "Verifications" => "",

        #: storage/themes/the23/auth/invite.php:26
        #: storage/themes/the23/auth/register.php:59
        "Please enter a email" => "",

        #: storage/themes/the23/auth/login.php:19
        "Welcome back" => "",

        #: storage/themes/the23/auth/register.php:19
        "Let's get you started right away!" => "",

        #: storage/themes/the23/auth/reset.php:25
        "Please enter your password" => "",

        #: storage/themes/the23/auth/reset.php:31
        "Please confirm your password" => "",

        #: storage/themes/the23/blog/partial.php:15
        "By" => "",

        #: storage/themes/the23/blog/partial.php:17
        "in" => "",

        #: storage/themes/the23/blog/partial.php:22
        "Read more" => "",

        #: storage/themes/the23/blog/search.php:13
        #: storage/themes/the23/blog/search.php:29
        "Results for \"{q}\"" => "",

        #: storage/themes/the23/blog/single.php:39
        "{c} mins read" => "",

        #: storage/themes/the23/class/themeSettings.php:130
        "Theme Scheme" => "",

        #: storage/themes/the23/class/themeSettings.php:141
        "Auto Mode" => "",

        #: storage/themes/the23/class/themeSettings.php:144
        "Theme Colors" => "",

        #: storage/themes/the23/class/themeSettings.php:145
        "You can customize colors for front pages (home, pricing, blog etc). Some colors are already preset. You can either use colors from the palette (example #1 with #1 in all options) or mix and match. You can also use your own colors. After saving settings, if you do not see changes, you need to release browser cache. If you are using Cloudflare, you will need to purge cache as well." => "",

        #: storage/themes/the23/class/themeSettings.php:148
        "Primary Color" => "",

        #: storage/themes/the23/class/themeSettings.php:152
        "Primary Alternative Color" => "",

        #: storage/themes/the23/class/themeSettings.php:156
        "Secondary Color" => "",

        #: storage/themes/the23/class/themeSettings.php:160
        "Primary Background Color (Light color)" => "",

        #: storage/themes/the23/class/themeSettings.php:164
        "Scrollbar Color" => "",

        #: storage/themes/the23/class/themeSettings.php:173
        "Pricing Style" => "",

        #: storage/themes/the23/class/themeSettings.php:178
        "Table" => "",

        #: storage/themes/the23/class/themeSettings.php:182
        "Blog Style" => "",

        #: storage/themes/the23/class/themeSettings.php:187
        "Grid" => "",

        #: storage/themes/the23/class/themeSettings.php:207
        "Custom Home Page Image" => "",

        #: storage/themes/the23/class/themeSettings.php:215
        "This will replace the default hero image that comes shipped with the script. JPG or PNG. 500 kb max. Recommended size: 560x710" => "",

        #: storage/themes/the23/class/themeSettings.php:218
        "Home Main Header" => "",

        #: storage/themes/the23/class/themeSettings.php:220
        "This will replace the home main header right before the shortener form. If you leave it empty, the site title will be shown." => "",

        #: storage/themes/the23/class/themeSettings.php:223
        "Home Main Description" => "",

        #: storage/themes/the23/class/themeSettings.php:225
        "This will replace the home main description right before the shortener form. If you leave it empty, the site description will be shown." => "",

        #: storage/themes/the23/class/themeSettings.php:230
        "Default Site Image" => "",

        #: storage/themes/the23/class/themeSettings.php:238
        "This will be used as default OG image unless override by pages." => "",

        #: storage/themes/the23/class/themeSettings.php:243
        "You can add custom links to the menu using the following format (one per line): TITLE|LINK" => "",

        #: storage/themes/the23/help/search.php:11
        "Search Results for \"{q}\"" => "",

        #: storage/themes/the23/help/top.php:4
        "How can we help you?" => "",

        #: storage/themes/the23/index.php:6
        "Intuitive, Secure<br>& Dynamic" => "",

        #: storage/themes/the23/index.php:8
        "Boost your campaigns by creating dynamic Links, QR codes and Bio Pages and get instant analytics." => "",

        #: storage/themes/the23/index.php:51
        "Get Started for Free" => "",

        #: storage/themes/the23/index.php:54
        "Start free, upgrade later" => "",

        #: storage/themes/the23/index.php:55 storage/themes/the23/index.php:65
        "No credit card required" => "",

        #: storage/themes/the23/index.php:56 storage/themes/the23/index.php:66
        "Easy to use" => "",

        #: storage/themes/the23/index.php:64
        "Start with a free trial" => "",

        #: storage/themes/the23/index.php:131
        "Smart Short Links" => "",

        #: storage/themes/the23/index.php:147
        "Collect data within minutes. Hassle-free." => "",

        #: storage/themes/the23/index.php:165
        "Intuitive and trackable links" => "",

        #: storage/themes/the23/index.php:178
        "Customizable and secure QR codes" => "",

        #: storage/themes/the23/index.php:190
        "Beautiful Bio Pages" => "",

        #: storage/themes/the23/index.php:191
        "Simple yet beautiful Bio Pages for your links" => "",

        #: storage/themes/the23/index.php:200
        "Turn long links into short links" => "",

        #: storage/themes/the23/index.php:203
        "Where are most of your users located?" => "",

        #: storage/themes/the23/index.php:208
        "Canada" => "",

        #: storage/themes/the23/index.php:217
        "United States of America" => "",

        #: storage/themes/the23/index.php:226
        "United Kingdom" => "",

        #: storage/themes/the23/index.php:235
        "Japan" => "",

        #: storage/themes/the23/index.php:249
        "Instantly link to apps. Automatically." => "",

        #: storage/themes/the23/index.php:252
        "Smart Deep Linking" => "",

        #: storage/themes/the23/index.php:255
        "Grow your audience by automatically opening mobile apps when the app is installed without any coding knowledge or SDK. Direct customers to download and install apps when not installed on the device. Many popular apps are supported and you can even add your own app links." => "",

        #: storage/themes/the23/index.php:264
        "Popular Apps" => "",

        #: storage/themes/the23/index.php:280
        "Features that<br>you'll <span class=\"gradient-primary clip-text\">ever need</span>" => "",

        #: storage/themes/the23/index.php:281
        "We provide you with all the tools you need to increase your productivity." => "",

        #: storage/themes/the23/index.php:323
        "Easily apply restrictions to your links and target users in specific countries & languages using specific devices." => "",

        #: storage/themes/the23/index.php:332
        "Track Everything" => "",

        #: storage/themes/the23/index.php:334
        "Track users with our advanced reporting tool and know exactly which city & country your users are based." => "",

        #: storage/themes/the23/index.php:345
        "Invite your team members and assign them specific privileges to manage everything and collaborate together." => "",

        #: storage/themes/the23/index.php:356
        "Easily add your own domain name for short links and take control of your brand name and your users' trust." => "",

        #: storage/themes/the23/index.php:365
        "Campaigns & Channels" => "",

        #: storage/themes/the23/index.php:367
        "Group and organize your Links, Bio Pages and QR Codes. With Campaigns, you can also get aggregated stats." => "",

        #: storage/themes/the23/index.php:394
        "Someone scanned your QR Code" => "",

        #: storage/themes/the23/index.php:408
        "Someone visited your Link" => "",

        #: storage/themes/the23/index.php:422
        "Someone viewed your Bio Page" => "",

        #: storage/themes/the23/index.php:435
        "Get instant results" => "",

        #: storage/themes/the23/index.php:438
        "Track & Optimize" => "",

        #: storage/themes/the23/index.php:449
        "Invite People" => "",

        #: storage/themes/the23/index.php:450 storage/themes/the23/index.php:453
        #: storage/themes/the23/index.php:462 storage/themes/the23/index.php:474
        "Invite your teammates & work together" => "",

        #: storage/themes/the23/index.php:451
        "Members" => "",

        #: storage/themes/the23/index.php:455
        "Jane Doe" => "",

        #: storage/themes/the23/index.php:464
        "Barry Tone" => "",

        #: storage/themes/the23/index.php:470
        "Invited" => "",

        #: storage/themes/the23/index.php:476
        "John Doe" => "",

        #: storage/themes/the23/index.php:486
        "Collaborate with your teammates" => "",

        #: storage/themes/the23/index.php:489
        "Invite & Work Together" => "",

        #: storage/themes/the23/index.php:492
        "Invite your teammates within seconds and work together as team to manage your Links, Bio Pages and QR codes. Team members can can be assigned specific privileges and can work on different workspaces." => "",

        #: storage/themes/the23/index.php:544
        "Connect your links to third-party applications so they can share information such as traffic and analytics." => "",

        #: storage/themes/the23/index.php:596
        "Add your custom pixel from providers such as Facebook & Google Tag Manager and track events right when they are happening." => "",

        #: storage/themes/the23/index.php:605
        "Notifications" => "",

        #: storage/themes/the23/index.php:607
        "Get notified when users use your links via various channels such Slack and webhook services like Zapier." => "",

        #: storage/themes/the23/index.php:623
        "Don't take our word for it." => "",

        #: storage/themes/the23/index.php:624
        "Trust our customers." => "",

        #: storage/themes/the23/index.php:657
        "Let <br><span class=\"gradient-primary clip-text\">the numbers</span><br> do the talking" => "",

        #: storage/themes/the23/index.php:690
        "Amazing Customers" => "",

        #: storage/themes/the23/index.php:713 storage/themes/the23/pages/bio.php:181
        #: storage/themes/the23/pages/qr.php:478
        "Take control of your links" => "",

        #: storage/themes/the23/index.php:714 storage/themes/the23/pages/bio.php:182
        #: storage/themes/the23/pages/qr.php:479
        "You are one click away from taking control of all of your links, and instantly get better results." => "",

        #: storage/themes/the23/pages/api.php:77 storage/themes/the23/pages/api.php:196
        "Copy Code" => "",

        #: storage/themes/the23/pages/api.php:127
        "Please note that the rate might change according to the subscribed plan." => "",

        #: storage/themes/the23/pages/bio.php:13
        "company" => "",

        #: storage/themes/the23/pages/bio.php:13
        "shop" => "",

        #: storage/themes/the23/pages/bio.php:13
        "name" => "",

        #: storage/themes/the23/pages/bio.php:17 storage/themes/the23/pages/qr.php:308
        "Contact sales" => "",

        #: storage/themes/the23/pages/bio.php:58
        "{n}+ Dynamic Widgets" => "",

        #: storage/themes/the23/pages/bio.php:59
        "Enhance your Bio Page with our dynamic widgets" => "",

        #: storage/themes/the23/pages/bio.php:72
        "Customize everything with our easy to use builder" => "",

        #: storage/themes/the23/pages/bio.php:85
        "Configure your Bio Page & blocks your way" => "",

        #: storage/themes/the23/pages/bio.php:103
        "Listen" => "",

        #: storage/themes/the23/pages/bio.php:132
        "Our videos" => "",

        #: storage/themes/the23/pages/bio.php:135
        "Follow us" => "",

        #: storage/themes/the23/pages/bio.php:160
        "Connect with your <span class=\"gradient-primary clip-text\">audience</span>" => "",

        #: storage/themes/the23/pages/bio.php:161
        "Add widgets from popular providers and enhance your Bio Page with dynamic content" => "",

        #: storage/themes/the23/pages/contact.php:46
        "Please enter a valid name" => "",

        #: storage/themes/the23/pages/contact.php:58
        "The message is empty or too short" => "",

        #: storage/themes/the23/partials/main_menu.php:122
        "Find answers to your questions" => "",

        #: storage/themes/the23/pricing/checkout.php:58
        "Tax ID (optional)" => "",

        #: storage/themes/the23/pricing/checkout.php:150
        "Enter promo code" => "",

        #: storage/themes/the23/pricing/index.php:8
        "Choose the plan <br>that works for you" => "",

        #: storage/themes/the23/pricing/index.php:10
        "Transparent pricing without any hidden fees so you always know what you will pay." => "",

        #: storage/themes/the23/pricing/index.php:29
        "Save {d}%" => "",

        #: storage/themes/the23/pricing/index.php:59
        "If you have questions, please don't hesitate to contact us." => "",

        #: storage/themes/the23/pricing/list.php:35
        #: storage/themes/the23/pricing/list.php:45
        #: storage/themes/the23/pricing/table.php:72
        "{x}/min" => "",
    ]
];
