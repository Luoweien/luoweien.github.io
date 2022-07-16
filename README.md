# LETON个人空间程序
## 目录
[TOC]

## 程序介绍

LETON个人空间 (https://www.leton.top/spon.html)，作者在闲暇之余写了一款日志加留言的网站源码，主要用于发布图文日志。功能简单，发文快捷，只需要登录即可发文，不用跳转到后台省去沉余操作。打造一个简单的web程序，开箱即用，方便快捷。支持作者 (https://www.leton.top/spon.html) 。LETON 个人空间 使用 HTML CSS JAVASCRIPT PHP MYSQL 开发的以记录日志、日记为主要功能的WEB网站程序。功能快捷、界面简单、使用方便，登陆后即可发布你的图文日志。


## 功能介绍

- 更改网站信息
- 更改个人信息
- 发布图文日志
- 查看相册图片
- 支持留言模块
- 关于页面详情


## 使用说明

首页的 -日浏览- 访问计数需要依赖cron作业系统的定时任务，进行计数清零操作。
你需要进入cron作业 --添加新的作业--执行命令如下
`
59	23	*	*	*	GET http://www.abc.com/le_kernel/le_cron.php
`
把abc.com替换成你的网站即可完成设置。不起作用时请把http和https都尝试一遍。


## 版本介绍

 | 功 能  |  免费  |  专业  | 
 |--------|--------|--------| 
 |个人使用|   是   |   是   | 
|功能建议|   是   |   是   |
|问题反馈|   是   |   是   |
|完全使用|   否   |   是   |
|更新支持|   否   |   是   |
|支持多图|   否   |   是   |
|问题指导|   否   |   是   |
|移除页脚|   否   |   是   |

*完全使用：不限制使用范围，可商用。
*支持多图：发文章支持多张图片。
*问题指导：有什么不懂给我发邮箱。


## 版本更新
0.19 初始版本
0.20 修复若干Bug
0.30 修复Bug，添加留言提醒
1.0 全新版本，改动肉眼可见


## 使用范围

免费版使用仅限于个人，禁止源码再编后以任何形式转卖和传播，不得用于商业用途(非法售卖源码获利，非个人群体使用)。支持作者获得商用后移除关于页面页脚信息(https://www.leton.top/spon.html) 。


## 法律声明

禁止将LETON个人空间程序的源码进行改编出售和其他非法牟利的活动。


## 联系我们

|  通道  |         邮箱         |
|-------|----------------------|
|购买咨询|2115271093@qq.com     |
|购买售后|rockstali@outlook.com |
|问题反馈|admin@leton.top       |


## 关于我们
官方网址：https://www.leton.top/spon.html
与我联系：2115271093@qq.com


## 文件目录

```
www
├─ .htaccess
├─ about.php
├─ content
│  ├─ css
│  │  ├─ add.css
│  │  ├─ animation.css
│  │  ├─ install.css
│  │  ├─ login.css
│  │  ├─ main.css
│  │  └─ settings.css
│  ├─ icon
│  │  ├─ About.svg
│  │  ├─ add.svg
│  │  ├─ arrow-up.svg
│  │  ├─ controls.svg
│  │  ├─ default.svg
│  │  ├─ diamond.svg
│  │  ├─ extension.svg
│  │  ├─ eye.svg
│  │  ├─ image.svg
│  │  ├─ Index.svg
│  │  ├─ language.svg
│  │  ├─ loading.svg
│  │  ├─ location.svg
│  │  ├─ lock.svg
│  │  ├─ map.svg
│  │  ├─ maximise.svg
│  │  ├─ Message.svg
│  │  ├─ new.svg
│  │  ├─ null.svg
│  │  ├─ Picture.svg
│  │  ├─ power.svg
│  │  ├─ qr.svg
│  │  ├─ refresh.svg
│  │  ├─ send.svg
│  │  ├─ settings.svg
│  │  ├─ share-android.svg
│  │  ├─ suser.svg
│  │  ├─ swap-horizontal.svg
│  │  ├─ thumb-up.svg
│  │  ├─ time.svg
│  │  ├─ turn-left.svg
│  │  ├─ user.svg
│  │  ├─ zoom-in.svg
│  │  └─ zoom-out.svg
│  ├─ js
│  │  ├─ lightbox.js
│  │  ├─ login.js
│  │  ├─ settings.js
│  │  └─ upimage.js
│  ├─ sys
│  │  ├─ conn.xml
│  │  ├─ counter.dat
│  │  ├─ countertoday.dat
│  │  ├─ guestbook.xml
│  │  ├─ qrcode.png
│  │  ├─ siteabout.xml
│  │  ├─ siteinfo.xml
│  │  └─ useravatar-up.jpg
│  └─ uploads
├─ favicon.ico
├─ index.php
├─ letontop_kernel
│  ├─ 403.shtml
│  ├─ letontop_404.php
│  ├─ letontop_add-class.php
│  ├─ letontop_add.php
│  ├─ letontop_background.php
│  ├─ letontop_cron.php
│  ├─ letontop_deleteimage.php
│  ├─ letontop_deletepost.php
│  ├─ letontop_editabout-changes.php
│  ├─ letontop_editabout.php
│  ├─ letontop_editpost-changes.php
│  ├─ letontop_editpost.php
│  ├─ letontop_functions.php
│  ├─ letontop_head.php
│  ├─ letontop_ilike.php
│  ├─ letontop_index-class.php
│  ├─ letontop_js.php
│  ├─ letontop_login-class.php
│  ├─ letontop_logout.php
│  ├─ letontop_message-changes.php
│  ├─ letontop_settings-changes.php
│  ├─ letontop_settings.php
│  └─ letontop_visit.php
├─ letontop_languages
│  ├─ default.json
│  ├─ en.json
│  ├─ ja.json
│  ├─ ko.json
│  ├─ ru.json
│  └─ zh_CN.json
├─ letontop_log
│  ├─ login.txt
│  └─ visit.txt
├─ login.php
├─ message.php
├─ picture.php
├─ README.md
└─ robots.txt

```

©2020 LETON