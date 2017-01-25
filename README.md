# phpee

### Separated interface 隔离接口

接口定义和要和实现隔离开，定义放在和实现不同的包内。

在 domain driven design 里面的实例代码 dddsample-core 中，domain.model.CargoRepository的实现是在infrastructure.persistence.hibernate.CargoRepositoryHibernate，是对p of eaa 的有力解释。
