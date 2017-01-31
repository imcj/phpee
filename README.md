# phpee

### Mock object

在编写单元测试用例的时候，Mock object可以模拟真实对象的复杂行为。

- 不确定的结果（例如当前时间和当前温度）
- 包含很难创建和复现的状态（例如网络错误）
- 很慢（例如在测试前初始化一个完整的数据库）

- [Wikipedia: Mock object](https://en.wikipedia.org/wiki/Mock_object)

### Domain Payload Object

DPO和DTO不同，DPO持有聚合的引用，这种对象设计更适合单进程环境下，分布式环境中是不能引用聚合的。

- [Vaughn Vernon] implement domain driven design
- [Vernon DPO]

### Separated interface 隔离接口

接口定义和要和实现隔离开，定义放在和实现不同的包内。

在 domain driven design 里面的实例代码 dddsample-core 中，domain.model.CargoRepository的实现是在infrastructure.persistence.hibernate.CargoRepositoryHibernate，是对p of eaa 的有力解释。
