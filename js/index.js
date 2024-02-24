(function(){
  const a = new Array(1000).fill(0)
  const b = a.reduce((acc, n) => {
    acc.push(acc.length + 1)
    return acc
  }, [])

  if(!window.confirm("Você gostaria de saber quantos números inteiros existem entre 1 e 1000?")) return false
  
  const message = (n) => {
    if(n === 1) return "Existe o número 1..." ;
    if(n === 2) return "Também temos o número 2..." ;

    return n !== 1000 ? `E o ${n}...` : `E por último o número 1000.`
  }

  b.map(n => alert(message(n)))
}())
