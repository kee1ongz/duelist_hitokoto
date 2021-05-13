# Duelist_hitokoto
A simple hitokoto API for duelist. /为决斗者打造的一言API。

Powerd by：[hexo-ruby-character](https://github.com/jamespan/hexo-ruby-character) &  Hitokoto

# Update Log

- v0.1 : Released. 目前只有13句召唤台词，后续增加。

# Description

**永续魔法：决斗者一言/Duelist‘s hitokoto/决闘者の一言**

**效果**:这个卡名的卡在1回合只能发动1张。从额外卡组随机选择一张怪兽卡，把那只怪兽无视召唤条件在自己场上特殊召唤。

```
决闘者（デュエリスト）の一言:
このカード名のカードは１ターンに１枚しか発動できない。
モンスターがエクストラデッキからランダムに１体選ぶ。そのモンスター１体を召喚条件を無視して自分フィールドに特殊召喚する。
```

![image-20210513162532643](https://kee1ongz.oss-cn-beijing.aliyuncs.com/img/image-20210513162532643.png)

**发动效果：**

![image-20210513160544616](https://kee1ongz.oss-cn-beijing.aliyuncs.com/img/image-20210513160544616.png)

![image-20210513160604470](https://kee1ongz.oss-cn-beijing.aliyuncs.com/img/image-20210513160604470.png)

![image-20210513160614384](https://kee1ongz.oss-cn-beijing.aliyuncs.com/img/image-20210513160614384.png)

# Usage

目前暂未上线在线API，仅支持用户手动部署。

- 需要：PHP+Ngnix/Apache等中间件 / LMAP环境。

- 将`duel.txt`和`duelist_hitokoto.php`部署于你的环境上。

- 直接访问`duelist_hitokoto.php`会输出带Ruby Template的台词：
  
  ![image-20210513163620673](https://kee1ongz.oss-cn-beijing.aliyuncs.com/img/image-20210513163620673.png)

- 外部页面调用用法，目前仅支持JS调用：

  ```html
  <script src = "http://xxxxx/duelist_hitokoto.php?code=js&id=test"type="text/javascript"></script>
  <script>duelist();</script>
  ```

![image-20210513164054459](https://kee1ongz.oss-cn-beijing.aliyuncs.com/img/image-20210513164054459.png)

# TODO

- 支持JSON、XML等不同格式
- 添加更多的台词
- Ruby Template自动化生成

  

  

  

