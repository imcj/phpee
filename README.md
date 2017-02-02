# phpee

### Domain model

领域模型是包含行为和数据的对象模型。[Martin folwer: Domain Model](https://martinfowler.com/eaaCatalog/domainModel.html)

领域模型由一系列网状的聚合对象组成。聚合对象由实体和值对象组成。

### Aggregate

聚合和组合很难区分，使用对象属于聚合。

[Martin folwer: DDD_Aggregate](https://martinfowler.com/bliki/DDD_Aggregate.html)

### Composition

### Repository

Repository 与 DAO 的区别是，Repository 保存和重建 Aggreation 对象，DAO 保存和重建表对象。

Repository 使用数据映射器持久化对象，在P of EE中详细说明了数据映射起如何工作。但是，在今天我们已经不需要在进行复杂的手动创建数据映射器。使用Hibernate这样的ORM工具帮助我们定义低侵入性的POJO对象，PHP环境和Hibernate类似的ORM选择是doctrine2。

### Data Access Object (DAO)

Java中的设计模式，DAO对象和JDBC交互为客户调用提供数据访问的接口。


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
