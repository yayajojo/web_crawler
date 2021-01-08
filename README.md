## Web Crawler Assignment

1. Goal: To fulfill the following requirements:
Your job is to design and create a CLI application that will parser www.alexa.com data.
The application signature should look like the following:
```
 $ ./crawler <action> <arg1> [<arg2>...]
```
The application must be able to accept these actions as param and perform the corresponding task: 
```
top <number> : show top <number> sites URL on www.alexa.com
```
eg.
```
 $ ./crawler top <number>
```
The application needs to have an extensible interface where adding a new action is just a matter of adding more files and should not require any modifications to the existing code base.

2. Solution:

(1)  Using PHP library fabpot/goutte to crawl websites www.alexa.com and extract data.

Result as follows:

```
      shell % ./crawler top 10
      The 1 site: Google.com
      The 2 site: Youtube.com
      The 3 site: Tmall.com
      The 4 site: Baidu.com
      The 5 site: Qq.com
      The 6 site: Sohu.com
      The 7 site: Facebook.com
      The 8 site: Taobao.com
      The 9 site: Amazon.com
      The 10 site: 360.cn
```
(2)  Using abstract class iAction to create an extensible interface

Every Aciton class should extend from abstract class iAction to implement method exec, so that ActionFactory can execute every Action class
 by simply executing exec method of Action class.
 
