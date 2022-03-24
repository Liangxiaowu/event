package main

import "fmt"

//const (
//	_ = iota
//	Zh
//	En
//	Ar
//	De
//	It
//	Ja
//)

type LanguageType int32

const (
	Zh LanguageType = 1
	En LanguageType = 2
	Ar LanguageType = 3
	De LanguageType = 4
	It LanguageType = 5
	Ja LanguageType = 6
)

func (l LanguageType) String() string {
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

var LanguageMap = map[int32]string{
	1: "中文",
	2: "英文",
	3: "阿拉伯文",
	4: "德文",
	5: "意大利文",
	6: "日文",
}

func (l LanguageType) String2() string {
	return LanguageMap[int32(l)]
}

func main() {
	//fmt.Println(Zh, En, Ar, De, It, Ja)
	fmt.Println(Zh.String(), En.String(), Ar.String(), De.String(), It.String(), Ja.String())
}
