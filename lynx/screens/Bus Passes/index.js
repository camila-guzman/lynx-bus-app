import React from "react";
import {View, Text, StyleSheet, Button } from "react-native";



export default  function BusPasses(){
    return (
        <View>
            
            <Text style={styles.container}>
            Active Passes
             </Text>
             <Text style={styles2.container}>
            Time Left: 00:00:00 Remaining
             </Text>
            
        
        </View>
        
    );
}

const styles = StyleSheet.create({
    container: {
        color: 'black',
        fontSize: 50,
        left: '16%',
        top: '2%',

    }
});
const styles2 = StyleSheet.create({
    container: {
        color: 'red',
        fontSize: 25,
        left: '10%',
        top: '4%',

    }
});