package com.packt.demo.section5

import com.packt.demo.section1.{WeightedEdge, WeightedGraph}

object TravelGraph {
  val g = new WeightedGraph(Map("0" -> Nil))
    .addEdge("0", WeightedEdge("A",7))
    .addEdge("0", WeightedEdge("B", 8))
    .addEdge("A", WeightedEdge("B", 7))
    .addEdge("A", WeightedEdge("C", 8))
    .addEdge("A", WeightedEdge("D", 6))
    .addEdge("B", WeightedEdge("D", 6))
    .addEdge("B", WeightedEdge("E", 4))
    .addEdge("C", WeightedEdge("F", 3))
    .addEdge("C", WeightedEdge("G", 3))
    .addEdge("D", WeightedEdge("C", 2))
    .addEdge("D", WeightedEdge("G", 6))
    .addEdge("D", WeightedEdge("F", 6))
    .addEdge("E", WeightedEdge("D", 7))
    .addEdge("E", WeightedEdge("G", 9))
    .addEdge("E", WeightedEdge("H", 6))
    .addEdge("I", WeightedEdge("F", 9))
    .addEdge("F", WeightedEdge("G", 5))
    .addEdge("G", WeightedEdge("I", 8))
    .addEdge("H", WeightedEdge("G", 8))
    .addEdge("H", WeightedEdge("I", 8))
}
