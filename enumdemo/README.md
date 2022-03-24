[在数学和计算机科学理论中，一个集的**枚举**是列出某些有穷[序列](https://baike.baidu.com/item/序列/1302588)集的所有成员的程序，或者是一种特定类型对象的计数。](https://baike.baidu.com/item/%E6%9E%9A%E4%B8%BE/2101055?fr=aladdin)

在日常开发中枚举比较常用，比如：星期、类型、等级、状态等。

Java语言里在 JDK 1.5 中提供枚举这个新特性, `enum` 关键字修饰的类型定义为枚举类型。

```java
enum Color { RED, GREEN, BLUE }
```

go语言并没有`enum`的定义，但是可以用`const`实现枚举类型。

```go
# 语言类型枚举
const (
	_ = iota
	Zh
	En
	Ar
	De
	It
	Ja
)

func main() {
	fmt.Println(Zh, En, Ar, De, It, Ja)
}

#return: 1 2 3 4 5 6
```

实际在业务中需要展示的是字符串类型，并不是`1，2，3，4，5，6`。

先要自定义一个类型`LanguageType`作为枚举的变量类型。

```go
type LanguageType int32

const (
	Zh		LanguageType = 1
	En		LanguageType = 2
	Ar		LanguageType = 3
	De		LanguageType = 4
	It		LanguageType = 5
	Ja		LanguageType = 6
)
```

再使用`LanguageType`作为函数接受者自定义一个`String()`函数，在函数里面实现转字符串。

```go
# 方法一
func (l LanguageType) String () string {
	switch l {
	case 1:
		return "中文"
	case 2:
		return "英文"
	case 3:
		return "阿拉伯文"
	case 4:
		return "德文"
	case 5:
		return "意大利文"
	case 6:
		return "日文"
	default:
		return ""
	}
}

# 方法二
var LanguageMap = map[int32]string{
	1: "中文",
	2: "英文",
	3: "阿拉伯文",
	4: "德文",
	5: "意大利文",
	6: "日文",
}

func (l LanguageType) String () string {
	return LanguageMap[int32(l)]
}
```

运行结果

```go
func main() {
	fmt.Println(Zh.String(), En.String(), Ar.String(), De.String(), It.String(), Ja.String())
}

#return: 中文 英文 阿拉伯文 德文 意大利文 日文
```

代码地址：https://github.com/Liangxiaowu/go-study/tree/main/enumdemo