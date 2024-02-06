import scala.util.Try

val ds = Map("A" -> 5, "B" -> 10, "C" -> 4)
val cities = List("B", "C")
cities.min
cities.minBy(c => c.length)
cities.minBy(c => ds(c))

val cities1 = List[String]()
Try(cities1.minBy(c => ds(c)))
Try(cities1.minBy(c => ds(c))).toOption
Try(cities.minBy(c => ds(c))).toOption
  .map(c => c.toUpperCase())

cities.filter(c => c.length > 5).map(c => c.toUpperCase)
cities.collect{case c if c.length > 5 => c.toUpperCase}






